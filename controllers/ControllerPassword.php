<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once ROOT.DS."PHPMailer".DS."src".DS."PHPMailer.php";
require_once ROOT.DS."PHPMailer".DS."src".DS."Exception.php";
require_once ROOT.DS."PHPMailer".DS."src".DS."SMTP.php";
require_once ROOT.DS."PHPMailer".DS."src".DS."OAuth.php";
//si qlq a oublier le mot de passe en va envoye un email 
class ControllerPassword{
    //Controller doit etre insatnacier par un parametre url

    private $_etudiantManager;
    private $_view;
    public function __construct()
    {
        if(isset($_POST["recuperer"])) {
            $email = htmlspecialchars($_POST["email"]);
            $this->sendMail($email);

        }
        else{
            $this->Password();
        }
    }
    public function Password(){
    
    
        $this->_view = new View("Password"); 
        $this->_view->generate(array("message"=>""));
    
    }



    public function sendMail($email){
        

        $this->_etudiantManager = new EtudiantManager();
        $etudiant = $this->_etudiantManager->getByEmail($email);
        //configurer le regle de ssl  
        if(sizeof($etudiant)!=0){
            //send email using PhpMailer
            $mail = new PHPMailer(true);
            try {
                //Server settings
               // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'Ensasafisafi@gmail.com';                     // SMTP username
                $mail->Password   = 'Ensasafisafi123456';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port       = 587;                                    // TCP port to connect t
                //Recipients
                $mail->setFrom('Ensasafkhgjghjisafi@gmail.com', 'dddd');
                //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
                $mail->addAddress($email);               // Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');
            
                // Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                foreach($etudiant as $et){
                    $mail->Body    = 'Votre mot de passe est <b> '.$et->password().'</b>';
                    break;
                }
              
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->send();
            
            } catch (Exception $e) {
                echo $e->getMessage();
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }finally{
                $this->_view = new View("Password"); 
                $this->_view->generate(array("message"=>"Check your Email "));
            }
        

        }
       else{
        $this->_view = new View("Password"); 
        $this->_view->generate(array("message"=>"Votre email n exite pas "));
       }
    }

}
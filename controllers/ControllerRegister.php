<?php
session_start();
require_once ROOT.DS."views".DS."View.php";

class ControllerRegister{
    //Controller doit etre insatnacier par un parametre url

    private $_etudiantManager;
    private $_view;
    public function __construct()
    {
        //Attention verifier l inscripttionnn 
        if(isset($url)){
            echo"Acc Err";
            throw new \Exception("page introuvable",1);

        }
        //si on click sur validerform on va genere la fonction valide
        //la fonction valide Verifi si l utilsateur existe deja ou non 
        // si exist on va refresh la page si non on va inscrir l utilisa 
        else if(isset($_POST["validerForm"])){
            echo "valide";
            $this->Valide();
        }
        else{
            echo "Register";
            $this->Register();
        }
    }
    public function Register(){
       
        $this->_view = new View("Register");
        $this->_view->generate(array());
    }

    public function Valide(){
        $filiere	= htmlspecialchars(($_POST['filiere']));
        $username	= htmlspecialchars(($_POST['username']));
        $password	= htmlspecialchars(($_POST['password']));
        $password2	= htmlspecialchars(($_POST['password2']));
    
        $nom1	= htmlspecialchars(($_POST['nom1']));
        $nom1 = strtoupper($nom1);
        $nom1 = ltrim($nom1);
    
        $nom2	= htmlspecialchars(($_POST['nom2']));
        $nom2 = htmlspecialchars(strtoupper($nom2));
        $nom2 = htmlspecialchars(ltrim($nom2));
    
        $nom3	= htmlspecialchars(($_POST['nom3']));
        $nom3 = strtoupper($nom3);
        $nom3 = ltrim($nom3);
    
        $prenom1	= htmlspecialchars(($_POST['prenom1']));
        $prenom1 = ltrim($prenom1);
        $prenom1 = ucfirst(strtolower($prenom1));
        $prenom1 = str_replace('\\', '', $prenom1);
        $prenom1 = str_replace("'", '', $prenom1);
    
        $prenom2	= htmlspecialchars(($_POST['prenom2']));
        $prenom2 = ltrim($prenom2);
        $prenom2 = ucfirst(strtolower($prenom2));
        $prenom2 = str_replace('\\', '', $prenom2);
        $prenom2 = str_replace("'", '', $prenom2);
    
        $prenom3	= htmlspecialchars(($_POST['prenom3']));
        $prenom3 = ltrim($prenom3);
        $prenom3 = ucfirst(strtolower($prenom3));
        $prenom3 = str_replace('\\', '', $prenom3);
        $prenom3 = str_replace("'", '', $prenom3);
    
        $GSM1	= htmlspecialchars(($_POST['GSM1']));
        $GSM1 = str_replace(' ', '', $GSM1);
        $GSM1 = str_replace('-', '', $GSM1);
        $GSM1 = str_replace('.', '', $GSM1);
        $GSM1 = str_replace('+212', '0', $GSM1);
        $GSM1 = chunk_split($GSM1,"2"," ");
    
        $GSM2	= htmlspecialchars(($_POST['GSM2']));
        $GSM2 = str_replace(' ', '', $GSM2);
        $GSM2 = str_replace('-', '', $GSM2);
        $GSM2 = str_replace('.', '', $GSM2);
        $GSM2 = str_replace('+212', '0', $GSM2);
        $GSM2 = chunk_split($GSM2,"2"," ");
    
        $GSM3	= htmlspecialchars(($_POST['GSM3']));
        $GSM3 = str_replace(' ', '', $GSM3);
        $GSM3 = str_replace('-', '', $GSM3);
        $GSM3 = str_replace('.', '', $GSM3);
        $GSM3 = str_replace('+212', '0', $GSM3);
        $GSM3 = chunk_split($GSM3,"2"," ");
    
        $email1	= htmlspecialchars(($_POST['email1']));
        $email1 = ltrim($email1);
        $email1 = strtolower($email1);
        $email1 = str_replace(' ', '', $email1);
    
        $email2	= htmlspecialchars(($_POST['email2']));
        $email2 = ltrim($email2);
        $email2 = strtolower($email2);
        $email2 = str_replace(' ', '', $email2);
    
        $email3	= htmlspecialchars(($_POST['email3']));
        $email3 = ltrim($email3);
        $email3 = strtolower($email3);
        $email3 = str_replace(' ', '', $email3);
        $emails = $email1 . ', ' . $email2 . ', ' . $email3  ;
        $date = date('Y/m/d-H:i');
        $this->_etudiantManager = new EtudiantManager();
        $etudiant = $this->_etudiantManager->getOneUser($username);
        $groupe=5;
        print_r($etudiant);
        if(sizeof($etudiant)==0 && $password==$password2){
            $this->_etudiantManager->InsertEtud($username,$password, $nom1 , $nom2 , $nom3 , 
            $prenom1 , $prenom2 ,$prenom3,$email1,$email2,$email3,$GSM1,$GSM2,$GSM3,$filiere,$date,$groupe);
            $this->_view = new View("Valide");
            $this->_view->generate(array());
        }
        else
        {
            $this->_view = new View("Register");
            $this->_view->generate(array());
        }


    }
    
}
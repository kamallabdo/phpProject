<?php
session_start();
require_once ROOT.DS."views".DS."View.php";

class ControllerLogin{
    //Controller doit etre insatnacier par un parametre url

    private $_etudiantManager;
    private $_adminManager;
    private $_encadrantManager;
    private $_view;
    private $i=0 ;
    public function __construct()
    {    //si on click sur la button login
        if(isset($_POST["login"])){
            $this->Login();
        }
        //si les session exist on appel loginUser sinon on Actualise la page Accueil
        
       else if (isset($_SESSION["password1"]) &&  isset($_SESSION["username1"])){
        if(isset($_SESSION["pass"]) && isset($_SESSION["user"])){
            $this->LoginAdmin();
        } 
        elseif(isset($_SESSION["password"]) && isset($_SESSION["username"])){
            $this->LoginUser();
        } 
        else{
            echo "rien";
        }
       }
    
        else {
            echo "wttf";
            header("Location: http://127.0.0.1:8888/edsa-pfe-mvc/ ");
         }  
     
        
         
}
    public function Login(){
            $_SESSION["password1"] = htmlspecialchars($_POST['password']);
            $_SESSION["username1"] = htmlspecialchars($_POST['username']);
           
            $this->_etudiantManager = new EtudiantManager();
            $this->_adminManager = new AdminManager();
            $this->_encadrantManager = new EncadrantManager();

            $etudiant = $this->_etudiantManager->getLogin($_SESSION["username1"] , $_SESSION["password1"] );
            $admin = $this->_adminManager->LoginAdmin($_SESSION["username1"] , $_SESSION["password1"] );
            $encadrant = $this->_encadrantManager->AllEncadrant();

            $etudiantInfo = $this->_etudiantManager->getByFiliere("F");
            $etudiantGtr = $this->_etudiantManager->getByFiliere("T");
            $tousEtudiant =  $this->_etudiantManager->getEtudiant();
           
            $_SESSION["etudiantInfo"] = $etudiantInfo;
            $_SESSION["etudiantGtr"]  = $etudiantGtr;
            $_SESSION["tousEtudiant"] = $tousEtudiant;
           
            //on test la taille de tabl etudiant
            //si un etudiant exist
            if(sizeof($etudiant)!=0){
                $_SESSION["username"]=$etudiant[0]->username();
                $_SESSION["password"]=$etudiant[0]->password();
                $this->_view = new View("Login");     
                $this->_view->generate(array( "etudiantInfo"  => $etudiantInfo,"etudiantGtr"=>  $etudiantGtr,"tousEtudiant"=>  $tousEtudiant));
            }
            elseif(sizeof($admin)!=0){
                print_r($admin[0]);
                $_SESSION["user"]=$admin[0]->user();
                $_SESSION["pass"]=$admin[0]->pass();
                $_SESSION["encadrant"]=$encadrant;
                echo $_SESSION["user"];
                $this->_view = new View("Admin");     
                $this->_view->generate(array("etudiantInfo"  =>  $etudiantInfo,"etudiantGtr"=> $etudiantGtr,"encadrant"=>$encadrant));
            }
            else{
                echo "Location";
                header("Location: http://127.0.0.1:8888/edsa-pfe-mvc/ ");
            }  
        
    }

    public function LoginUser(){
            if(isset[$_POST[""]])
            $this->_view = new View("Login"); 
            $this->_view->generate(array("etudiantInfo"  => $_SESSION["etudiantInfo"],"etudiantGtr"=>$_SESSION["etudiantGtr"],"tousEtudiant"=>$_SESSION["tousEtudiant"]));
        
    }
    public function LoginAdmin(){
        echo "login admin";
        $this->_view = new View("Admin"); 
        $this->_view->generate(array("etudiantInfo"  => $_SESSION["etudiantInfo"],"etudiantGtr"=>$_SESSION["etudiantGtr"],
        "tousEtudiant"=>$_SESSION["tousEtudiant"],"encadrant"=>$_SESSION["encadrant"]));
    }
    public function File(){

    }
     
}
<?php
session_start();
session_destroy();
require_once ROOT.DS."views".DS."View.php";

class ControllerAccueil{
    //Controller doit etre insatnacier par un parametre url

    private $_etudiantManager;
    private $_view;
    public function __construct()
    {
        if(isset($url)){
            echo"Acc Err";
            throw new \Exception("page introuvable",1);

        }
        else{
            $this->Accueil();
        }
    }
    public function Accueil(){
        echo "Acc";
        $this->_etudiantManager = new EtudiantManager();
        $etudiantInfo = $this->_etudiantManager->getByFiliere("F");
        $etudiantGtr = $this->_etudiantManager->getByFiliere("T");
        $this->_view = new View("Accueil"); 
        $this->_view->generate(array("etudiantInfo"  => $etudiantInfo,"etudiantGtr"=>$etudiantGtr));
    }
}
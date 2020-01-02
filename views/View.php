<?php 


class View {
    private $_file;

    //titre de la page 
    private $_title ;
    function __construct($action)
    {
        $action = ucfirst($action);
        $this->_file = ROOT.DS."views".DS."view".$action.".php";

    }

    //la fonction qui va afficher la vue

    public function generate($data){
        $content = $this->generateFile($this->_file,$data);
        //template
        $view = $this->generateFile(ROOT.DS."views".DS."template.php",array(
            "title"=>$this->_title,
            "content"=>$content
        ));
        echo $view;
       
    }
    public function generateFile($file,$data){
    
        if(file_exists($file)){
    
            extract($data);

            //commancer la temporisation
            ob_start();
            require $file;
            return ob_get_clean();

        }
        else{
            throw new \Exception("Fichier ".$file." introuvable",1);
        }
    }
}
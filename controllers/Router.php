<?php
require_once ROOT.DS."views".DS."View.php";
class Router{
    private $cntr;
    private $view ; 
    public function routeReq(){


        try{
            //charger les class de notre project
            spl_autoload_register(function($class) {
                require_once(ROOT.DS."models".DS.$class.".php");

            });
            //on cree une var url contient l url tape par l utilisateur 
            $url = '';
            // on determine le controlleur
          
            if(isset($_GET['url'])){
                //on decompose url et on lui appliue un filtre
                $url = explode("/",filter_var($_GET["url"],FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0]));

                $controllerClass = "Controller".$controller;
                
                //on retrouve le chemin du controlleur voulu 
                $controllerFile = ROOT.DS."controllers".DS.$controllerClass.".php";

                //si le fichier existe 
                if(file_exists($controllerFile)){
                    //on lance la classe et on inclu le fichier 
                    require_once($controllerFile);
                    $this->ctrl = new $controllerClass($url);

                }
                else{
                    throw new \Exception("page introuvable ",1);
                }
            } 
            else{
               echo "hhh";
                require_once(ROOT.DS."controllers".DS."ControllerAccueil.php");
                $this->ctrl = new ControllerAccueil($url);
            }

        }catch(\Exception $e){
            $errMsg = $e->getMessage();
            echo $errMsg;
            $this->_view = new View("Error");
            $this->_view->generate(array("errorMsg"  => $errMsg));
        }
    }
}
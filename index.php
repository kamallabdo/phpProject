<?php
    define("ROOT",dirname(__FILE__));
    
    define("DS",DIRECTORY_SEPARATOR);   
    
    require_once("controllers/Router.php");
     $routeur = new Router();
     $routeur->routeReq();

?>
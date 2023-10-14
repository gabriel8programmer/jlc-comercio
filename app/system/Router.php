<?php 

namespace jlc_comercio\System;

use Exception;

class Router {

    public static function dispatch(){
        //main route values
        $httpverb = $_SERVER["REQUEST_METHOD"];
        $controller = "main";
        $method = "index";

        //check if exists in uri the parameter ct
        if (isset($_GET["ct"])){
            $controller = $_GET["ct"];
        }

        //check if exists in uri the parameter mt
        if (isset($_GET["mt"])){
            $method = $_GET["mt"];
        }

        //get all params in get
        $parameters = $_GET;

        //check if ct exists in params
        if (key_exists("ct", $parameters)){
            unset($parameters["ct"]);
        }

        //check if mt exists in params
        if (key_exists("mt", $parameters)){
            unset($parameters["mt"]);
        }

        //tries to instanciate the controller and execute the method
        try {
            $class = "jlc_comercio\Controllers\\$controller";
            $controller = new $class();
            $controller->$method(...$parameters);
        } catch (Exception $error){
            die($error->getMessage());
        }
    }
}
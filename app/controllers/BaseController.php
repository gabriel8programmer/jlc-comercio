<?php 

namespace jlc_comercio\Controllers;

abstract class BaseController {

    public function view($view, $data = []){

        //check if data is null
        if (!is_array($data)){
            die("Data is not a array: " . var_dump($data));
        }

        //tranforms each index of the array in variable
        extract($data);

        //check if the exists the file
        if (file_exists("../app/views/$view.php")){
            require_once("../app/views/$view.php");
        } else {
            die("this View does not exists: " . $view);
        }
    }
}
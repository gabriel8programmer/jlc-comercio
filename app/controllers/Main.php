<?php 

namespace jlc_comercio\Controllers;

use jlc_comercio\Controllers\BaseController;
use jlc_comercio\Models\Users;

class Main extends BaseController {

    public function index(){

        //check if there is no active user in session
        if (!check_login()){
            $this->login_frm();
            return;
        }

        //load data
        $data["login"] = $_SESSION["login"];

        $this->view("layouts/html_header");
        $this->view("header-navbar", $data);
        $this->view("homepage", $data);
        $this->view("layouts/html_footer");
    }

    //function for the to show the form login
    public function login_frm(){
        //check if there is a user in the session
        if (check_login()){
            $this->index();
            return;
        }

        $data = [];

        //check if there was a validation errors
        if (!empty($_SESSION["validation_errors"])){
            $data["validation_errors"] = $_SESSION["validation_errors"];
            unset($_SESSION["validation_errors"]);
        }

        //check if there was a server errors
        if (!empty($_SESSION["server_error"])){
            $data["server_error"] = $_SESSION["server_error"];
            unset($_SESSION["server_error"]);
        }

        //display login form
        $this->view('layouts/html_header');
        $this->view("login-frm", $data);
        $this->view("layouts/html_footer");
    }

    //function to try the data forms
    public function login_submit(){

         //check if there is a user in the session
         if (check_login()){
            $this->index();
            return;
        }

        //check if there was a post in form
        if ($_SERVER["REQUEST_METHOD"] != "POST"){
            $this->index();
            return;
        }

        //form validation
        $validation_errors = [];
        if (empty($_POST["input_user"]) || empty($_POST["input_password"])){
            $validation_errors[] = "Usuário e Senha são campos obrigatórios.";
        }

        //get form data
        $username = $_POST["input_user"];
        $password = $_POST["input_password"];

        //check if there are validation errors
        if (!empty($validation_errors)){
            $_SESSION["validation_errors"] = $validation_errors;
            $this->login_frm();
            return;
        }

        //success case
        $model = new Users();
        $results = $model->check_login($username, $password);

        if (!$results["status"]){
            //logger
            logger("$username - login inválido", "error");

            //invalid login
            $_SESSION["server_error"] = "Login Inválido";
            $this->login_frm();
            return;
        }

        //logger
        logger("$username - Login com sucesso");

        //load data user
        $results = $model->get_user_data($username);

        //create the session user
        $_SESSION["login"] = $results["data"];

        //return the index
        $this->index();
    }

    public function logout(){

        //disable direct access to logout
        if (!check_login()){
            $this->index();
            return;
        }

        //logger
        logger($_SESSION["login"]->name . " - fez logout");
        //clear user session
        unset($_SESSION["login"]);
        //back in the method index
        $this->index();
        return;
    }
}
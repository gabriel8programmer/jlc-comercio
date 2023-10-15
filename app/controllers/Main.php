<?php 

namespace jlc_comercio\Controllers;

use jlc_comercio\Controllers\BaseController;
use jlc_comercio\Models\Users;

class Main extends BaseController {

    public function index(){
       
        //check if there is no active user in session
        if (!check_session()){
            $this->login_frm();
            return;
        }

        $this->view("layouts/html_header");
        echo "<h3 class='text-danger'>principal</h3>";
        $this->view("layouts/html_footer");
    }

    //function for the to show the form login
    public function login_frm(){
        //check if there is a user in the session
        if (check_session()){
            $this->index();
            return;
        }

        //check if there are erros (after login_submit)
        $data = [];
        if (!empty($_SESSION["validation_errors"])){
            $data["validation_errors"] = $_SESSION["validation_errors"];
            unset($_SESSION["validation_errors"]);
        }

        //display login form
        $this->view('layouts/html_header');
        $this->view("login_frm", $data);
        $this->view("layouts/html_footer");
    }

    //function to try the data forms
    public function login_submit(){

         //check if there is a user in the session
         if (check_session()){
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

        //validation for the username
        //validation for the password

        //check if there are validation errors
        if (!empty($validation_errors)){
            $_SESSION["validation_errors"] = $validation_errors;
            $this->login_frm();
            return;
        }

        $model = new Users();
        $results = $model->check_login($username, $password);
        if ($results["status"]){
            echo "OK!";
        } else {
            echo "NOK!";
        }
    }
}

/*
usuário 1 => 11111
usuário 2 => 22222
usuário 3 => 33333
*/
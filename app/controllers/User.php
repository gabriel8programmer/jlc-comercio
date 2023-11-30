<?php

namespace jlc_comercio\Controllers;

use jlc_comercio\Controllers\BaseController;
use jlc_comercio\Models\Users;

class User extends BaseController
{

    public function index(){
        if (!check_login()){
            return header("Location: index.php");
        }

        //load all data for the users's panel
        $model = new Users();
        $results = $model->get_all_data();

        $data["login"] = $_SESSION["login"];
        $data["users"] = $results["data"];

        //load users
        $this->view("layouts/html_header");
        $this->view("header-navbar", $data);
        $this->view("users-data", $data);
        $this->view("layouts/html_footer");
    }

    public function insert_user(){

        if (!check_login()){
            header("Location: index.php");
        }

        if ($_SERVER["REQUEST_METHOD"] != "POST"){
            $this->index();
            return;
        }

        $data = $_POST;
        $params = [
            ":name" => $data["input_name"],
            ":cpf" => $data["input_cpf"],
            ":email" => $data["input_email"],
            ":phone" => $data["input_phone"],
            ":password" => $data["input_password"],
            ":profile" => $data["select_profile"]
        ];

        //to instacitate the class users
        $model = new Users();
        $results = $model->insert($params);
        header("Location: ?ct=user&mt=index");
        $this->index();
    }

    public function edit_user($id){
        if (!check_login()){
            header("Location: index.php");
        }

        if ($_SERVER["REQUEST_METHOD"] != "POST"){
            header("Location: ?ct=user&mt=index");
            return;
        }

        $data = $_POST;
        $params = [
            ":name" => $data["input_name"],
            ":cpf" => $data["input_cpf"],
            ":email" => $data["input_email"],
            ":password" => $data["input_password"],
            ":profile" => $data["select_profile"]
        ];

        $model = new Users();
        $results = $model->update($id, $params);
        header("Location: ?ct=user&mt=index");
        $this->index();

    }

    public function remove_user($id){
        if (!check_login()) {
            header("Location: index.php");
            return;
        }

        $model = new Users();
        $results = $model->delete($id);
        header("Location: ?ct=user&mt=index");
        $this->index();
    }

}

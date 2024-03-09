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

        //add modals
        $this->view("user-modal-add-new");
        $this->view("user-modal-edit");
        $this->view("user-modal-delete");
        
        $this->view("users-dashboard", $data);
        $this->view("layouts/html_footer");
    }

    public function insert(){

        if (!check_login()){
           header("Location: index.php");
        }

        if ($_SERVER["REQUEST_METHOD"] != "POST"){
            $this->index();
            return;
        }

        $data = json_decode(file_get_contents("php://input"), true);
        extract($data);

        $params = [
            ":name" => $name,
            ":cpf" => $cpf,
            ":email" => $email,
            ":password" => $password,
            ":profile" => $profile
        ];

        //to instaciate the class users
        $model = new Users();
        $results = $model->insert($params);
    }

    public function update(){
        if (!check_login()) {
            header("Location: index.php");
            return;
        }

        if ($_SERVER["REQUEST_METHOD"] != "PUT"){
            $this->index();
            return;
        }

        $data = json_decode(file_get_contents("php://input"), true);
        extract($data);

        $params = [
            ":id" => $id,
            ":name" => $name,
            ":cpf" => $cpf,
            ":email" => $email,
            ":password" => $password,
            ":profile" => $profile
        ];

        // echo "<pre>";
        // echo print_r($params);
        // exit();

        $model = new Users();
        $results = $model->update($params);
    }

    public function delete(){
        if (!check_login()) {
            header("Location: index.php");
            return;
        }

        if ($_SERVER["REQUEST_METHOD"] != "DELETE"){
            $this->index();
            return;
        }

        $data = json_decode(file_get_contents("php://input"), true);
        extract($data);
        $model = new Users();
        $results = $model->delete($id);
    }

}

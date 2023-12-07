<?php

namespace jlc_comercio\Controllers;

use jlc_comercio\Controllers\BaseController;
use jlc_comercio\Models\Users;
use Monolog\Handler\BrowserConsoleHandler;

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

        return json_encode($data["users"], JSON_PRETTY_PRINT);
    }

    public function insert_user(){

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
            ":name" => $nameSend,
            ":cpf" => $cpfSend,
            ":email" => $emailSend,
            ":phone" => $phoneSend,
            ":password" => $passwordSend,
            ":profile" => $profileSend
        ];

        //to instacitate the class users
        $model = new Users();
        $results = $model->insert($params);
        $this->index();
    }

    public function update_user(){
        if (!check_login()){
            header("Location: index.php");
        }

        $data = json_decode(file_get_contents("php://input"), true);
        extract($data);
        $params = [
            ":id" => $idSend,
            ":name" => $nameSend,
            ":cpf" => $cpfSend,
            ":email" => $emailSend,
            ":password" => $passwordSend,
            ":profile" => $profileSend
        ];

        $model = new Users();
        $results = $model->update($params);

    }

    public function remove_user(){
        if (!check_login()) {
            header("Location: index.php");
            return;
        }

        if ($_SERVER["REQUEST_METHOD"] != "POST"){
            $this->index();
            return;
        }

        $data = json_decode(file_get_contents("php://input"), true);
        extract($data);
        $model = new Users();
        $results = $model->delete($idSend);
    }

}

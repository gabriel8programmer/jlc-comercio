<?php

namespace jlc_comercio\Controllers;

use jlc_comercio\Controllers\BaseController;
use jlc_comercio\Models\Users;

class User extends BaseController
{

    public function index()
    {
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

        if ($_SERVER["REQUEST_METHOD"] != "post"){
            header("Location: ?ct=user&mt=index");
            return;
        }

        $data = json_decode(file_get_contents("php://input"), true);

        printData($data);
        
        $params = [
            ":name" => $data["name"],
            ":cpf" => $data["cpf"],
            ":email" => $data["email"],
            ":phone" => $data["phone"],
            ":password" => $data["password"],
            ":profile" => $data["profile"]
        ];

        //to instacitate the class users
        $model = new Users();
        $results = $model->insert($params);
        $this->index();
    }

    public function edit_user($id)
    {
    }

    public function remove_user($id)
    {
        if (!check_login()) {
            header("Location: index.php");
            return;
        }

        $model = new Users();
        $results = $model->delete($id);

        $this->index();
    }

}

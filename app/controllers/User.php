<?php

namespace jlc_comercio\Controllers;

use jlc_comercio\Controllers\BaseController;
use jlc_comercio\Models\Users;

class User extends BaseController
{

    public function load_users()
    {
        //load all data for the users's panel
        $model = new Users();
        $results = $model->load_all_data();

        $data["login"] = $_SESSION["login"];
        $data["users"] = $results["data"];

        //load users
        $this->view("layouts/html_header");
        $this->view("header-navbar", $data);
        $this->view("panel-users", $data);
        $this->view("layouts/html_footer");
    }

    public function add_new_user(){
        if (!check_login()){
            header("Location: index.php");
        }

        if (!$_SERVER["REQUEST_METHOD"] != "POST"){
            header("Location: index.php");
        }

        $params = [
            ":name" => $_POST["input_name"],
            ":cpf" => $_POST["input_cpf"],
            ":email" => $_POST["input_email"],
            ":phone" => $_POST["input_phone"],
            ":password" => $_POST["input_password"],
            ":profile" => $_POST["select_profile"]
        ];

        //to instacitate the class users
        $model = new Users();
        $results = $model->insert_new_user($params);

        $this->load_users();
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
        $results = $model->delete_user($id);

        $this->load_users();
    }

}

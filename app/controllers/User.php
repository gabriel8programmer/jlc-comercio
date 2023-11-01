<?php

namespace jlc_comercio\Controllers;

use jlc_comercio\Controllers\BaseController;
use jlc_comercio\Models\Users;

class User extends BaseController {

    public function get_users(){

        //check if exists a user session
        if (!check_session()){
            header("Location: index.php");
        }

        //load all data for the users's panel
        $model = new Users();
        $results = $model->load_all_data();
       
        $data["login"] = $_SESSION["login"];
        $data["users"] = $results["data"];

        //load users
        $this->view("layouts/html_header");
        $this->view("header-navbar", $data);
        $this->view("panel-users", $data);
        $this->view("modal-new-user");
        $this->view("layouts/html_footer");
    }
    
    public function edit_user($id){

    }

    public function delete_user($id){

    }
}
<?php 

namespace jlc_comercio\Controllers;

use jlc_comercio\Controllers\BaseController;
use jlc_comercio\Models\Users;

class Main extends BaseController {

    public function index(){
        // $this->view("layouts/html_header");
        // $this->view("login");
        // $this->view("layouts/html_footer");

        //instanciate model user
        $model = new Users();
        $results = $model->get_total_users();

        printData($results);
    }

    public function login(){
        $this->view("layouts/html_header");
        $this->view("dashboard");
        $this->view("layouts/html_footer");
    }
}
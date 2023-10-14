<?php 

namespace jlc_comercio\Controllers;

use jlc_comercio\Controllers\BaseController;

class Main extends BaseController {

    public function index(){
        $this->view("layouts/html_header");
        $this->view("login");
        $this->view("layouts/html_footer");
    }

    public function login(){
        $this->view("layouts/html_header");
        $this->view("dashboard");
        $this->view("layouts/html_footer");
    }
}
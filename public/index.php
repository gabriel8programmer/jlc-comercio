<?php

//init system session
session_start();

use jlc_comercio\System\Router;

//import all packages and extensions for the project
require_once("../vendor/autoload.php");

//calling the method dispatch in Router
Router::dispatch();

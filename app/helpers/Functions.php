<?php 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//simple function what to check if exists a login
function check_login(){
    return isset($_SESSION["login"]);
}

//this function create the log in the app
function logger($message = '', $level = "info"){
    //create log channel 
    $log = new Logger("app_logs");
    $log->pushHandler(new StreamHandler(LOGS_PATH));

    //add log message
    switch($level){
        case "info":
            $log->info($message);
            break;
            case "notice":
                $log->notice($message);
                break;
            case "warning":
                $log->warning($message);
                break;
            case "error":
                $log->error($message);
                break;
            case "critical":
                $log->critical($message);
                break;
            case "alert":
                $log->alert($message);
                break;
            case "emergency":
                $log->emergency($message);
                break;
            default:
                $log->info($message);
                break;
    }
}

//simple function for to show the datas in display
function printData($data, $die = true){
    echo "<pre>";
    if (is_array($data) || is_object($data)){
        print_r($data);
    } else {
        echo $data;
    }

    if ($die){
        die("<br>FIM<br>");
    }
}

// Function to validate an email address
function validateEmail($email) {
    // Remove leading and trailing whitespace from the email address
    $email = trim($email);
    
    // Validate the format of the email address using a regular expression
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    
    // Split the email address into username and domain
    //list($username, $domain) = explode('@', $email);
    
    // Validate the username and domain
    if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
        return false;
    }
    
    return true;
}
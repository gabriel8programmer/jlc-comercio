<?php 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//simple function what to check if exists a user in the session
function check_session(){
    return isset($_SESSION["user"]);
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
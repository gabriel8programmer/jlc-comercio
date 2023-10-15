<?php 

//simple function what to check if exists a user in the session
function check_session(){
    return isset($_SESSION["user"]);
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
<?php 

//simple function for to show the datas in display
function printData($data, $die = true){
    echo "<pre>";
    if (is_array($data) || is_object($data)){
        print_r($data);
    } else {
        echo $data;
    }
}
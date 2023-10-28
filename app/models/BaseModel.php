<?php 

namespace jlc_comercio\Models;

use jlc_comercio\System\Database;

abstract class BaseModel {

    public $db;

    public function db_connect(){
        //define the configs of the database
        $options = [
            "host" => MYSQL_HOST,
            "database" => MYSQL_DATABASE,
            "username" => MYSQL_USERNAME,
            "password" => MYSQL_PASSWORD,
        ];
        //instanciate the class Database 
        $this->db = new Database($options);
    }

    public function query($sql, $params = []){
        return $this->db->execute_query($sql, $params);
    }

    public function non_query($sql, $params = []){
        return $this->db->execute_non_query($sql, $params);
    }
}
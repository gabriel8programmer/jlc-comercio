<?php

namespace jlc_comercio\Models;

use jlc_comercio\Models\BaseModel;

class Users extends BaseModel
{
    public function check_login($username, $password){
        //check if the login is valid
        $params = [
            ":username" => $username
        ];

        //check if there is a user in the database
        $this->db_connect();
        $results = $this->query("SELECT id, password FROM users
         WHERE AES_ENCRYPT(:username, '". MYSQL_AES_KEY . "') = name", $params);

        //if there is no user, returns false
        if ($results->affected_rows == 0){
            return [
                "status" => false
            ];
        }
        
        // there is a user with that name (username)
        // check if the password is correct
        if (!password_verify($password, $results->results[0]->password)){
            return [
                "status" => false
            ];
        }

        //login is ok
        return [
            "status" => true,
        ];
    }

    public function get_user_data($username){

        //get all params in the current user
        $params = [
            ":username" => $username
        ];

        //get all necessary datas in the user
        $results = $this->query("SELECT id, AES_DECRYPT(name, '" . MYSQL_AES_KEY . "') name, profile FROM users WHERE AES_ENCRYPT(:username, '" . MYSQL_AES_KEY . "') = name", $params);

        return [
            "status" => "success",
            "data" => $results->results[0]
        ];
    }
}

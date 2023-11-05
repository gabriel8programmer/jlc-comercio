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
        $results = $this->query("SELECT id, " . 
        "AES_DECRYPT(password, '". MYSQL_AES_KEY . "') password ". 
        "FROM users WHERE " . 
        "AES_ENCRYPT(:username, '". MYSQL_AES_KEY . "') = name", $params);

        //if there is no user, returns false
        if ($results->affected_rows == 0){
            return [
                "status" => false
            ];
        }
        
        // there is a user with that name (username)
        // check if the password is correct
        if ($results->results[0]->password != $password){
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

    public function load_all_data(){
        //get all necessary datas in the user
        $this->db_connect();
        $results = $this->query("SELECT id, ".
        "AES_DECRYPT(cpf, '" . MYSQL_AES_KEY . "') cpf, ".
        "AES_DECRYPT(name, '" . MYSQL_AES_KEY . "') name, ".
        "AES_DECRYPT(phone, '" . MYSQL_AES_KEY . "') phone, ". 
        "AES_DECRYPT(email, '" . MYSQL_AES_KEY . "') email, ".
        "AES_DECRYPT(password, '" . MYSQL_AES_KEY . "') password, ". 
        "profile FROM users");

        return [
            "status" => "success",
            "data" => $results->results
        ];
    }

    public function insert_new_user($params){
        $this->db_connect();
        $results = $this->non_query(
            "INSERT INTO users VALUES ( 0, " . 
            "AES_ENCRYPT(:name, '". MYSQL_AES_KEY ."'), " .
            "AES_ENCRYPT(:cpf, '". MYSQL_AES_KEY ."'), " .
            "AES_ENCRYPT(:email, '". MYSQL_AES_KEY ."'), " .
            "AES_ENCRYPT(:phone, '". MYSQL_AES_KEY ."'), " .
            "AES_ENCRYPT(:password, '". MYSQL_AES_KEY ."'), " .
            ":profile, " .
            "NOW(), " . 
            "NULL " .
            ")", $params
        );

        return [
            "status" => "success",
            "data" => $results->results
        ];
    }

    public function delete_user($id){
        $params = [
            ":id" => $id
        ];
        $this->db_connect();
        $results = $this->non_query("DELETE FROM users ". 
        "WHERE id = :id", $params);

        return [
            "status" => $results->status,
            "data" => $results->results
        ];
    }
}

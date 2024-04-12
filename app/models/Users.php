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
        ":username = name", $params);

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
        $params = [
            ":username" => $username
        ];

        $results = $this->query("SELECT id, `name`,
        AES_DECRYPT(`cpf`, '" . MYSQL_AES_KEY . "') cpf,
        AES_DECRYPT(`email`, '" . MYSQL_AES_KEY . "') email,
        AES_DECRYPT(`password`, '" . MYSQL_AES_KEY . "') password,
        `profile` FROM users WHERE :username = `name`", $params);

        return [
            "status" => "success",
            "data" => $results->results[0]
        ];
    }

    public function get_all_data(){
        $this->db_connect();
        $results = $this->query("SELECT id, ".
        "name, ".
        "AES_DECRYPT(cpf, '" . MYSQL_AES_KEY . "') cpf, ".
        "AES_DECRYPT(email, '" . MYSQL_AES_KEY . "') email, ".
        "AES_DECRYPT(password, '" . MYSQL_AES_KEY . "') password, ". 
        "profile FROM users");

        return [
            "status" => "success",
            "data" => $results->results
        ];
    }

    public function insert($params){
        $this->db_connect();
        $results = $this->non_query(
            "INSERT INTO users VALUES ( 0, " . 
            ":name, " .
            "AES_ENCRYPT(:cpf, '". MYSQL_AES_KEY ."'), " .
            "AES_ENCRYPT(:email, '". MYSQL_AES_KEY ."'), " .
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

    public function update($params){

        $this->db_connect();

        //get profile and name of the params
        $profile = $params[":profile"];
        $name = $params[":name"];

        if (is_null($profile)){
            $results = $this->get_user_data($name);
            $params[":profile"] = $results["data"]->profile;
        }

        $results = $this->non_query("UPDATE users SET ". 
        "name = :name, ".
        "cpf = AES_ENCRYPT(:cpf, '". MYSQL_AES_KEY ."'), " .
        "email = AES_ENCRYPT(:email, '". MYSQL_AES_KEY ."'), " .
        "password = AES_ENCRYPT(:password, '". MYSQL_AES_KEY ."'), " .
        "profile = :profile, " . 
        "updatedAt = NOW() " .
        "WHERE id = :id", $params);
    
        return [
            "status" => "success",
            "data" => $results->results
        ];
    }

    public function delete($id){
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

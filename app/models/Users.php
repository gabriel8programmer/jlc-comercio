<?php 

namespace jlc_comercio\Models;

use jlc_comercio\Models\BaseModel;

class Users extends BaseModel {
    public function get_total_users(){
        $this->db_connect();
        return $this->query("SELECT COUNT(*) total FROM users");
    }    
}
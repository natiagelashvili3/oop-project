<?php

use config\Model;

class User extends Model {

    public function getUser($username, $password) {

        $pass = md5($password);
        $query = "SELECT * FROM users 
                   WHERE name = '".$username."'
                     AND pass = '".$pass."'
                   ";

        $data = $this->execute($query);

        return $data[0]['id'];
    }

}
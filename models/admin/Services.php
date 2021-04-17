<?php

use config\Model;

class Services extends Model {

    public function getAllServices() {

        return $this->get('services');

    }

    public function insertData($data) {
        $name = $data['name'];
        $text = $data['text'];

        $query = "INSERT INTO services 
                     SET name = '".$name."', text = '".$text."' ";

        $this->run($query);
    }
    
}
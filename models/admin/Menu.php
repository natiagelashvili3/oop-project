<?php

use config\Model;

class Menu extends Model {

    public function getMenuItems() {

        return $this->get('menu');

    }

    public function insertData($data) {
        $name = $data['name'];
        $path = $data['path'];
        $ord = $data['ord'];

        $query = "INSERT INTO menu 
                     SET name = '".$name."', path = '".$path."', ord = ".$ord;

        $this->run($query);
    }
    

    public function updateMenuItem($data) {

        $name = $data['name'];
        $path = $data['path'];
        $ord = $data['ord'];
        $id   = $data['id'];

        $query = "UPDATE menu 
                     SET name = '".$name."', path = '".$path."', ord = ".$ord." 
                     WHERE id = " . $id;

        $this->run($query);

    }
}
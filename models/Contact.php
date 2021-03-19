<?php

use config\Database;

class Contact extends Database {

    public function getMenu() {
        
        $query = "SELECT * FROM menu ORDER BY ord ASC";

        return $this->execute($query);
    }

}
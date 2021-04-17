<?php

use config\Model;

class Home extends Model {
    
    public function getAllServices() {

        return $this->get('services');

    }
    
}
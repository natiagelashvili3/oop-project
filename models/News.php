<?php

use config\Model;

class News extends Model {

    public function getAllNews() {

        return $this->get('news');

    }

}
<?php

use config\Model;

class About extends Model {

    public function getAboutData() {

        return $this->getSingle('about');

    }

    public function updateData($data) {
        $title = $data['title'];
        $text = $data['text'];

        $query = "UPDATE about 
                     SET title = '".$title."', text = '".$text."' WHERE id = 1 ";

        $this->run($query);
    }
}
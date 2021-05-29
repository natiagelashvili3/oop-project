<?php

use config\Model;

class News extends Model {

    public function getNews() {

        return $this->get('news');

    }

    public function insertData($data) {

        $fileName = '';

        if( isset($_FILES) && isset($_FILES['image']) ) {

            // Version 1
            $k =  explode('.', $_FILES['image']['name']);
            $extension = array_pop($k);
            $original_name = implode('.', $k);
            $fileName = $original_name . '_' . time() . '.'. $extension;

            // Version 2
            // $fileName = time() . '_' . $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];

            move_uploaded_file($tmp_name, ROOT_URL.'/assets/uploads/'.$fileName);
        }

        $title = $data['title'];
        $short_text = $data['short_text'];
        $text = $data['text'];

        $query = "INSERT INTO news 
                     SET title = '".$title."', 
                         text = '".$text."',
                         short_text = '".$short_text."',
                         image = '".$fileName."' ";

        $this->run($query);
    }
    

    public function updateMenuItem($data) {

        // $name = $data['name'];
        // $path = $data['path'];
        // $ord = $data['ord'];
        // $id   = $data['id'];

        // $query = "UPDATE menu 
        //              SET name = '".$name."', path = '".$path."', ord = ".$ord." 
        //              WHERE id = " . $id;

        // $this->run($query);

    }
}
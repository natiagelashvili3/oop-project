<?php

use config\Model;

class News extends Model {

    public function getNews() {

        return $this->get('news');

    }

    public function insertData($data) {

        $fileName = '';

        if(isset($_FILES) && isset($_FILES['image'])) {
            $name = $_FILES['image']['name'];
            $exp = explode('.', $name);
            $extension = end($exp);
            $name1 = $exp[0];
            $fileName = $name1 . '-'.time().'.'.$extension;
            $file_tmp =$_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp, ROOT_URL."/assets/uploads/".$fileName);
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
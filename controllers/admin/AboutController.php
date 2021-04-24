<?php

use config\AdminController;

class AboutController extends AdminController {

    public function index()
    {
        $about = new About();
        
        $this->data['about'] = $about->getAboutData();

        $this->tpl = 'about';
    }

    public function update($data) {

        $about = new About();
        
        $about->updateData($data);

        header('Location: '.HOST.'admin/?page=about');
    }

}
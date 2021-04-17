<?php

use config\Controller;

class AboutController extends Controller {

    public function index()
    {
        $about = new About();
        
        $this->data['about'] = $about->getAboutData();
        $this->data['menu'] = $about->getMenu();
        
        $this->tpl = 'about';
    }

}
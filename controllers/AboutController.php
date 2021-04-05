<?php

use config\Controller;

class AboutController extends Controller {

    public function index()
    {
        $about = new About();
        
        $this->data['menu'] = $about->getMenu();
        $this->data['title'] = 'short informatino';
        $this->data['text'] = 'this is a test text';
        
        $this->tpl = 'about';
    }

}
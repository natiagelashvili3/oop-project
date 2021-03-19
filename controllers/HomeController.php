<?php

use config\Controller;

class HomeController extends Controller {

    public function index()
    {
        $home = new Home();
        
        $this->data['menu'] = $home->getMenu();
        $this->data['services'] = [];

        $this->tpl = 'home';
    }

}
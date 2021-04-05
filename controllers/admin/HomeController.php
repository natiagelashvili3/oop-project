<?php

use config\AdminController;

class HomeController extends AdminController {

    public function index()
    {
        $home = new Home();
        
        $this->data['menu'] = $home->getMenu();
        $this->data['services'] = [];
        $this->tpl = 'home';
    }

}
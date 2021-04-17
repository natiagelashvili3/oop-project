<?php

use config\AdminController;

class ServicesController extends AdminController {

    public function index()
    {
        $services = new Services();

        $this->data['services'] = $services->getAllServices();

        $this->tpl = 'services/index';
    }

    public function create() {
        
        $this->tpl = 'services/create';

    }

    public function store($data) {

        $services = new Services();

        $services->insertData($data);

        header('Location: '.HOST.'/admin/?page=services');

    }

    public function edit() {

        print_r('this is an edi method');
    }

    public function update() {}

    public function delete() {}

}
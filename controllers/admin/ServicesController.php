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

        header('Location: '.HOST.'admin/?page=services');

    }

    public function edit() {

        $service = new Services();

        $this->data['service'] = $service->getById('services', $_GET['id']);
        
        $this->tpl = 'services/edit';
    }

    public function update($data) {
        
        $service = new Services();

        $service->updateService($data);

        header('Location: '.HOST.'admin/?page=services');

    }

    public function delete($data) {

        $service = new Services();

        $service->deleteById('services', $data['id']);

        echo 'ok';

        //header('Location: '.HOST.'admin/?page=services');
    }

}
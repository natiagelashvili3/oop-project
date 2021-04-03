<?php

class AdminPage {

    public $pageName;

    public function __construct($request) {

        if(Session::get('user_id') == NULL) {
            $this->pageName = 'login';
        } else {
            $this->pageName = isset($request['page']) && !empty($request['page']) 
                                                            ? $request['page'] 
                                                            : 'home';
            $this->getModel();
        }

        $this->getContoller();
    } 

    public function getContoller() {
        $path = $this->getControllerPath();

        require_once $path;

        $pageName = $this->getControllerName();

        $page = new $pageName($this->pageName);
        $page->renderView();
    }

    public function getModel() {
        $path = $this->getModelPath();
        require_once $path;
    }

    public function getControllerPath() {
        // controllers/admin/HomeController.php
        // controllers/admin/AboutController.php
        // controllers/admin/ContactConroller.php

        $name = $this->getControllerName() . '.php';
        return '../controllers/admin/' . $name;
    }

    public function getModelPath() {
        // models/admin/Home.php
        // models/admin/About.php
        // models/admin/Contact.php

        $name = $this->getModelName() . '.php';
        return '../models/admin/' . $name;
    }

    public function getControllerName() {
        // HomeController
        // AboutController
        // ContactConroller

        return ucfirst($this->pageName) . 'Controller' ;
    }

    public function getModelName() {
        // Home
        // About
        // Contact

        return ucfirst($this->pageName) . '' ;
    }

}
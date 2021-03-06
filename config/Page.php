<?php

class Page {

    public $pageName;

    public function __construct($request) {
        $this->pageName = isset($request['page']) && !empty($request['page']) 
                            ? $request['page'] 
                            : 'home';
    } 

    public function getContoller() {
        $path = $this->getControllerPath();

        require_once $path;

        $pageName = $this->getControllerName();

        $page = new $pageName($this->pageName);
        $page->renderView();
    }

    public function getControllerPath() {
        // controllers/HomeController.php
        // controllers/AboutController.php
        // controllers/ContactConroller.php

        $name = $this->getControllerName() . '.php';
        return 'controllers/' . $name;
    }

    public function getControllerName() {
        // HomeController
        // AboutController
        // ContactConroller

        return ucfirst($this->pageName) . 'Controller' ;
    }

}
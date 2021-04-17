<?php

namespace config;

abstract class AdminController {

    public $page;

    public $tpl;

    public $data = [];

    private $action;

    public function __construct($pagename, $request) {
        $this->page = $pagename;
        $this->action = isset($request['action']) && $request['action'] ? $request['action'] : 'index'; 
    }

    abstract public function index(); 

    public function renderView() {

        $this->{$this->action}();

        $tpl = $this->tpl;

        $data = $this->data;

        include '../views/admin/layout.php';
    }

}
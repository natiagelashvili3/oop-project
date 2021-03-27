<?php

namespace config;

abstract class Controller {

    public $page;

    public $tpl;

    public $data = [];

    public function __construct($pagename) {
         $this->page = $pagename;
    }

    abstract public function index(); 

    public function renderView() {

        $this->index();

        $tpl = $this->tpl;

        $data = $this->data;

        include 'views/layout.php';
    }

}
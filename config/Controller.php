<?php

namespace config;

class Controller {

    public $page;

    public function __construct($pagename) {
        $this->page = $pagename;
    }

    public function renderView() {
        include 'views/'.$this->page.'.php';
    }

}
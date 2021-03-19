<?php

namespace config;

class Controller {

    public $page;

    public $tpl;

    public $data = [];

    public function __construct($pagename) {
        $this->page = $pagename;
    }

    public function renderView() {

        $this->index();

        $tpl = $this->tpl;

        $data = $this->data;

        include 'views/layout.php';
    }

}
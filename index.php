<?php

    require_once 'config/Page.php';
    require_once 'config/Database.php';
    require_once 'config/Controller.php';

    $page = new Page($_GET);
    $page->getModel();
    $page->getContoller();
    
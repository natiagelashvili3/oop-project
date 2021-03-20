<?php

    require_once 'config/Page.php';
    require_once 'config/Database.php';
    require_once 'config/Model.php';
    require_once 'config/Controller.php';

    $page = new Page($_GET);
    $page->getModel();
    $page->getContoller();
    

    // abstract class controller {

    //     abstract public function index();

    //     public function renderView(){
    //         $this->index();
    //     }

    // }

    // class home extends controller {
    //     public function index() {
    //         echo 'home page';
    //     }
    // }

    // class about extends controller {
    //     public function index() {
    //         echo 'about page';
    //     }
    // }

    // class contact extends controller {
    //     public function index() {
    //         echo 'contact page';
    //     }
    // }


    // $home = new home();
    // print_r( $home->renderView() );

    
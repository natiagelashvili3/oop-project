<?php
    
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);

    require_once 'config/Config.php';
    require_once 'helpers/Helper.php';
    require_once 'config/Page.php';
    require_once 'config/Database.php';
    require_once 'config/Model.php';
    require_once 'config/Controller.php';

    $page = new Page($_GET);
    $page->getModel();
    $page->getContoller();
    


    // class A {
    //     function __construct() {
    //         print_r('FROM A<br>');
    //     }
    
    //     public function index() {
    //         print_r('index-A<br>');
    //     }
    // }

    // class B extends A {

    //     function __construct() {
    //         parent::__construct();
    //         print_r('FROM B<br>');
    //     }

    //     public function index() {
    //         print_r('index-B<br>');
    //     }

    //     public function parentIndex() {
    //         parent::index();
    //     }

    // }

    // // $a = new A();
    // // $a->index();

    // $b = new B();
    // $b->index();
    // $b->parentIndex();







    // აბსტრაქტული კლასები

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


    // სტატიკური

    // abstract class Test {

    //     public static $name = 'george';

    //     public function getString() {
    //         return self::$name;
    //     } 

    //     abstract public function getNumber(); 
    // }

    // class test2 extends Test{
    //     public function getNumber(){
    //         return 1;
    //     }
    // }

    // echo Test::$name; 

    // $test = new test2();
    // echo $test->getString();




    // static method and propertis
    // cont in class


    
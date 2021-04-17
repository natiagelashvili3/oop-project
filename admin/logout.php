<?php

    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);

    require_once '../config/Config.php';
	require_once '../helpers/Session.php';

	Session::start();
    Session::end();

    header('Location: '.HOST.'admin');
    
    
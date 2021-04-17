<?php

    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);

    require_once '../config/Config.php';
	require_once '../helpers/Session.php';
    require_once '../config/Database.php';
    require_once '../config/Model.php';
    require_once '../models/admin/User.php';

	Session::start();
    
    $userModel = new User();

    $id = $userModel->getUser($_POST['username'], $_POST['password']);

    if($id) {
        Session::set('user_id', $id);
        header('Location: '.HOST.'admin');
    } else {
        header('Location: '.HOST.'admin/?u=0');
    }
    
    
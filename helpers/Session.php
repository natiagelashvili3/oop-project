<?php

class Session {

    public $user_id;

    public static function start() {
        session_start();
    }

    public static function end() {
        session_unset();
        session_destroy();
    }


    public static function get($key){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

}
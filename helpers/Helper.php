<?php


class Helper {

    const NAME = "natia";

    public static function convertString($string) {
        return str_replace(' ', '-', $string);
    }

    public static function hash($string) {
        return md5($string);
    }

}
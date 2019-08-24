<?php

namespace inky\lib;

class http
{
    static function get($v)
    {
        return isset($_GET[$v]) ? $_GET[$v] : null;
    }
    static function post($v)
    {
        return isset($_POST[$v]) ? $_POST[$v] : null;
    }
}

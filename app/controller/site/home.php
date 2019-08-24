<?php

namespace app\controller\site;

class home extends \app\controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        view('site/index');
    }
}

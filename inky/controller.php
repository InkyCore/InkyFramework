<?php
/**
 * 所有控制器的祖级
 */
namespace inky;


class controller
{
    protected $router;
    protected $httpRequest;
    protected $db;

    function __construct()
    { }

    function setRouter($v)
    {
        $this->router = $v;
    }

    function setHttpRequest($v)
    {
        $this->httpRequest = $v;
    }

    function setDb($v)
    {
        $this->db = $v;
    }
}

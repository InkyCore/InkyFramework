<?php

namespace inky\http;

interface httpRequest
{
    public function get(String $v);
}

class request implements httpRequest
{
    private $setUrl;
    private $route;
    function __construct($route)
    {
        $this->route = $route;
    }

    function setSetUrl($v)
    {
        $this->setUrl = $v;
    }
    
    private function routeToMap()
    {
        echo $this->setUrl;
        preg_match_all('/({*})/', $this->setUrl, $arr);
        print_r($arr);
        return $arr;
    }

    function get(String $v)
    {
        $arr = $this->routeToMap();
        return $v;
    }
}

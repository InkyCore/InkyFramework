<?php

namespace inky;


interface request
{ }

class router implements request
{
    private $string; //url全路径
    private $befo;
    private $setUrl;
    public $urlMap = array(
        'class' => '',
        'function' => '',
        'arguments' => [],
    );

    function __construct($string)
    {
        $this->string = $string; //   接收到的URL
    }

    // function toUrlMap()
    // {
    //     preg_match("/(\S*)@/", $this->string, $class);
    //     // preg_match("/(\S*)@/", $this->string, $function);
    //     // preg_match("/(\S*)@/", $this->string, $arguments);

    //     $this->urlMap['class'] = '/app/controller/' . preg_match('', $this->string, $class);
    //     // $this->urlMap['function'] = preg_match('', $this->string, $function); 
    //     // $this->urlMap['arguments'] = preg_match('', $this->string, $arguments); 
    // }

    /**
     * 分配class和function
     */
    private function toMap($aim)
    {
        preg_match("/(\S*)@/", $aim, $class);
        $this->urlMap['class'] =  $class[1];

        preg_match("/@(\S*)/", $aim, $function);
        $this->urlMap['function'] =  $function[1];
    }

    /**
     * 指定路由列表匹配
     */
    private function setUrlMatch($setUrl)
    {
        $setUrl = str_replace('/', '\/', $setUrl);//正则公式修正
        return preg_match("/^" . $setUrl . "$/i", $this->string);
    }

    /**
     * get请求
     */
    function get($setUrl, $aim)
    {
        /**
         * 对应指定的路由，分配参数
         */
        if ($this->setUrlMatch($setUrl)) {
            $this->setSetUrl($setUrl);
            $this->toMap($aim);
            $arguments = explode('/', $this->string);
            $this->urlMap['arguments'] =  $arguments;
        }
    }

    /**
     * post请求
     */
    function post($url, $aim)
    { }

    function getSetUrl()
    {
        return $this->setUrl;
    }

    function setSetUrl($v)
    {
        return $this->setUrl = $v;
    }
}

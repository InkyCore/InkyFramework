<?php

namespace inky;

use inky\http\httpRequest;

class start
{
    private $router;
    private $httpRequest; //http请求
    private $database;
    private $view;

    function __construct()
    {
        $this->router = new \inky\router(\inky\lib\http::get('route'));
        $this->httpRequest = new \inky\http\request(\inky\lib\http::get('route'));
    }
    function run()
    {
        include PATH . '/router.php';

        $this->httpRequest->setSetUrl($this->router->getSetUrl()); //上文中设定的路由内容

        //var_dump($this->router->urlMap);

        $class = '\\app\\controller\\' . $this->router->urlMap['class'];
        $function = $this->router->urlMap['function'];

        if (!class_exists($class)) {
            die('路由指定的控制器不存在');
        }

        $controller = new $class();
        $controller->setRouter($this->router);
        $controller->setHttpRequest($this->httpRequest);
        $controller->setDb(new \inky\db(null));

        if (!method_exists($controller, $function)) {
            die('路由指定的function不存在');
        }

        $controller->$function();
    }
}

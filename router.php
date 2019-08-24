<?php
/**
 * 路由指向目标控制器
 */






$this->router->get('', 'site\home@index');
$this->router->get('blog/cc/(.*)/a', 'blog@cc');
$this->router->get('user', 'user@cc');
<?php

namespace inky;

class debug
{
    function throw($text)
    {
        if (CONF['debug'] == 1) {//如果开启了debug模式
            echo '<div id="debug" style="positon:fixed;left:0;right:0;bottom:0;height:200px; " >' . $text . '</div>';
            exit;
        }
    }
}

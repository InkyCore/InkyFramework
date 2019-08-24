<?php


function debug($v)
{
    $d = new \inky\debug();
    $d->throw($v);
}
function url()
{ }
function path()
{ }
function http_get()
{ }
function http_post()
{ }
function view($file, $data = [])
{ 
    $v = new inky\view(PATH . '/resource/view');
    $v->file = $file;
    $v->data = $data;
    $v->display();
}

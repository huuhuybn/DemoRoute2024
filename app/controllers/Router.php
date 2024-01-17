<?php

namespace Huuhu\Demo\controllers;

class Router
{
    public $routes = [];
    public function setRoute($url, $action){
        // action là function
        $this->routes[$url]= $action;
    }

    public function handleRoute($url){
        if (array_key_exists($url,$this->routes)){
            $action = $this->routes[$url];
            if (is_callable($action))
            $action();
            else {
                echo '404 Not Found function';
            }
        }else {
            echo '404 Not Found';
        }
    }
}
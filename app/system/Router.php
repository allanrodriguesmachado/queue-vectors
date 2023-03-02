<?php

namespace App\System;

use Exception;
use App\Controllers\Main;

class Router
{
    public static function dispatch()
    {
        // main route values
        $httpVerb = $_SERVER['REQUEST_METHOD'];
        $controller = 'main';
        $method = 'index';

        // check uri parameters
        if(isset($_GET['controller'])){
            $controller = $_GET['controller'];
        }

        if(isset($_GET['method'])){
            $method = $_GET['method'];
        }

        // method parameters
        $parameters = $_GET;

        // remove controller from parameters
        if(key_exists("controller", $parameters)) {
            unset($parameters["controller"]);
        }

        // remove method from parameters
        if(key_exists("method", $parameters)) {
            unset($parameters["method"]);
        }

        // tries to instanciate the controller and execute the method
        try {
            $class = "App\Controllers\\$controller";
            $controller = new $class();
            $controller->$method(...$parameters);

        } catch (Exception $err) {
            die($err->getMessage());
        }
    }
}
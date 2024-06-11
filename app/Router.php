<?php
namespace App;

class Router {
    protected $routes = [];

    public function get($path, $handler)
    {
        $this->routes['GET'][$path] = $handler;     
    }

    public function post($path, $handler)
    {
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch($method, $path)
    {
        if (array_key_exists($method, $this->routes) && array_key_exists($path, $this->routes[$method])) {
            $handler = $this->routes[$method][$path];

            call_user_func($handler);
        }
        else {
            header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
            echo "404 Not Found";
        }
    }
}
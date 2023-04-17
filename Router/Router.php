<?php

namespace Router;

use Exceptions\RouteNotFoundException;

class Router
{
    private array $routes;

    public function getRoutes(){
        var_dump($this->routes);
    }

    public function register(string $path, callable|array $action): void
    {
        $this->routes[$path] = $action;
    }

    public function resolve(string $uri): mixed
    {
        $path = explode('?', $uri)[0];
        $action = $this->routes[$path] ?? null;

        
        if(is_callable($action)){
            return $action();
        }
        
        if(is_array($action)){
            [$className, $method] = $action;

            if(class_exists($className) && method_exists($className, $method)){
                $class = new $className();
                $result = call_user_func_array([$class, $method], []);
                return $result;
            }
        }

        throw new RouteNotFoundException();
    }
}
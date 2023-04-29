<?php

//Ne rien toucher

namespace Source;

use Exception;
use Router\Router;

class App
{
    //(ne pas toucher)
    public function __construct(private Router $router, private array $request)
    { }

    //(ne pas toucher)
    public function run()
    {
        try{
            echo $this->router->resolve($this->request['uri'], $this->request['method']);
        } catch (Exception $e){
            echo $e->getMessage();
        } 
    }
}
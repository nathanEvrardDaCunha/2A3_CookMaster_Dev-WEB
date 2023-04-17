<?php

use Router\Router;

require __DIR__ . "/../vendor/autoload.php";

$router = new Router();


$router->register('/', ['Controllers\HomeController', 'index']);

/*$router->register('/contact', function(){
    return 'ContactPage';
});*/

//echo "\n" . __DIR__ . "/../Router/Router.php\n";

//var_dump($_SERVER['REQUEST_URI']);

try{
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (Exception $e){
    echo $e->getMessage();
}
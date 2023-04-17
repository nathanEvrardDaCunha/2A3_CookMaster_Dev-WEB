<?php

use Router\Router;

require __DIR__ . "/../vendor/autoload.php";

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router();

$router->register('/', ['Controllers\HomeController', 'index']);

/*$router->register('/contact', function(){
    return 'ContactPage';
});*/

try{
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (Exception $e){
    echo $e->getMessage();
}
<?php

use Source\App;
use Router\Router;

require __DIR__ . "/../vendor/autoload.php";

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router();

$router->get('/', ['Controllers\HomeController', 'index']);

/*$router->register('/contact', function(){
    return 'ContactPage';
});*/

(new App($router, [
    'uri' => $_SERVER['REQUEST_URI'],
    'method' => $_SERVER['REQUEST_METHOD']
    ]
))->run();


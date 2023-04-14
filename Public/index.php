<?php

//use Router\Router;

use Router\Router;

require __DIR__ . "/../vendor/autoload.php";
//require_once __DIR__ . '/../Router/Router.php';

//use Classes\Payment\Stripe;

//$test = new Stripe();

echo "0";


$router = new Router();

echo "1";


/*$router->register('/', function(){
    return 'HomePage';
});*/

/*$router->register('/contact', function(){
    return 'ContactPage';
});*/

echo "2";
echo "\n" . __DIR__ . "/../Router/Router.php";

//echo $router->resolve($_SERVER['REQUEST_URI']);
<?php

//Ne pas toucher les importations suivante :
use Source\App;
use Router\Router;

//Permet que l'on puisse utiliser l'autoload de composer
require __DIR__ . "/../vendor/autoload.php";

//Permet de connaitre le chemin pour afficher les Views
define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

//Initialisation du controlleur (a ne jamais toucher)
$router = new Router();

//Sert a enregistrer les nouveaux controlleur créé pour le routeur (toujours mettre le nom d'un controlleur + l'argument "index")
$router->get('/', ['Controllers\HomeController', 'index']);
$router->get('/store', ['Controllers\BoutiqueController', 'index']);
$router->get('/boutique', ['Controllers\BoutiqueController', 'index']);
$router->get('/dashboard', ['Controllers\DashboardController', 'index']);
$router->get('/events', ['Controllers\EventController', 'index']);
$router->get('/evenement', ['Controllers\EventController', 'index']);
$router->get('/evenements', ['Controllers\EventController', 'index']);
$router->get('/event', ['Controllers\EventController', 'index']);
$router->get('/cook', ['Controllers\DashboardController', 'index']);
$router->get('/cuisine', ['Controllers\DashboardController', 'index']);
$router->get('/cooking', ['Controllers\DashboardController', 'index']);
$router->get('/services', ['Controllers\DashboardController', 'index']);
$router->get('/service', ['Controllers\DashboardController', 'index']);



//Transmet l'affichage de la page a l'utilisateur (ne jamais toucher)
(new App($router, [
    'uri' => $_SERVER['REQUEST_URI'],
    'method' => $_SERVER['REQUEST_METHOD']
    ]
))->run();


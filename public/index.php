<?php

require_once __DIR__."/../vendor/autoload.php";

use app\controllers\HomeController;
use app\controllers\LoginController;
use app\controllers\RegisterController;
use app\controllers\vacancyController;
use app\Router;
use app\Request;

$router = new Router(new Request());

$router->get('/', 'home');

$router->get('/about','about');


$router->get('/vacancy',[VacancyController::class,'vacancy']);

$router->resolve();


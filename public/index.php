<?php

require_once __DIR__."/../vendor/autoload.php";

use app\controllers\AdminController;
use app\controllers\CallbackController;
use app\controllers\CompanyController;
use app\controllers\LoginController;
use app\controllers\LogoutController;
use app\controllers\SavedController;
use app\controllers\vacancyController;
use app\database\database;
use app\Router;
use app\Request;

$router = new Router(new Request());


$router->get('/', 'home');

$router->get('/about','about');

//$router->get('/g-callback','g-callback');

$router->get('/g-callback',[CallbackController::class,'CallbackController']);


$router->get('/login',[LoginController::class,'Login']);

$router->get('/company','company');

$router->get('/company',[CompanyController::class,'company']);


$router->get('/vacancy',[VacancyController::class,'Vacancy']);


$router->get('/saved',[SavedController::class,'SavedController']);




$router->get('/logout',[LogoutController::class,'LogoutController']);


if (isset($_COOKIE['id'])) {
    if ($_COOKIE['id'] == 114551987610828307918) {
        $router->get('/admin-panel','admin-panel');

        $router->post('/admin-panel',[AdminController::class,'AdminController']);
    }
};




//$router->get('/company-vacancies',/);

$router->post('/company-vacancies',[\app\controllers\CurrentController::class,'CurrentController']);




$DynamicView = new Database();
//$table= $database->get_posts();

//foreach ($table as $post){
//    $router->get('/'. $post['poster_name'], $post['poster_name']);
//}

$router->resolve();


<?php


namespace app\controllers;


use app\database\database;
use app\IRequest;
use app\Router;

class vacancyController
{
    public function Vacancy(IRequest $request,Router $router){
        session_start();
        define('REQUIRED_FIELD_ERROR', 'This field is required');
        $data = $request->getBody();
        $errors = [];


        $db = new database();
        $db = $db->getVacancies();

        $params = [
            'errors' => $errors,
            'data' => $data,
            'vacancies' => $db
        ];

        return $router->renderView('vacancy', $params);
    }

}
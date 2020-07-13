<?php


namespace app\controllers;


use app\database\database;
use app\IRequest;
use app\Router;

class CurrentController
{
    public function CurrentController(IRequest $request,Router $router){
        session_start();
        define('REQUIRED_FIELD_ERROR', 'This field is required');
        $data = $request->getBody();
        $errors = [];

        $current = new database();
        $current = $current->getCurrentVacancies($data['ID']);

        $params = [
            'errors' => $errors,
            'data' => $data,
            'current' => $current
        ];

        return $router->renderView('company-vacancies', $params);
    }

}
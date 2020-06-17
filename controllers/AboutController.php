<?php


namespace app\controllers;


use app\database\database;
use app\IRequest;
use app\Router;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class AboutController
{
    public function register(IRequest $request,Router $router){
        session_start();
        define('REQUIRED_FIELD_ERROR', 'This field is required');
        $data = $request->getBody();
        $errors = [];

        $params = [
            'errors' => $errors,
            'data' => $data
        ];

        return $router->renderView('about', $params);
    }

}
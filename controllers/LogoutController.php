<?php


namespace app\controllers;


use app\IRequest;
use app\Router;

class LogoutController
{

    public function LogoutController(IRequest $request,Router $router){
        define('REQUIRED_FIELD_ERROR', 'This field is required');
        $data = $request->getBody();
        $errors = [];

        $params = [
            'errors' => $errors,
            'data' => $data
        ];

        setcookie('id', "", time() - 53000);
        setcookie('email', "", time() - 53000);
        setcookie('picture', "", time() - 53000);
        setcookie('gender', "", time() -53000);
        setcookie('picture', "", time() -5000);
        setcookie('givenName', "", time() -5000);
        setcookie('familyName', "", time() -5000);
        header("Refresh:0");

        header('Location: http://localhost:8080/vacancy');
        exit();
    }
}
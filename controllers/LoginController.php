<?php

namespace app\controllers;
use app\database\database;
use app\IRequest;
use app\Router;

class LoginController
{
    /**
     * @param IRequest $request
     * @param Router $router
     * @return false|string
     */
    public function Login(IRequest $request, Router $router)
    {
//        header('Location: http://localhost:8080/vacancy');
//        exit();
        $params = '';
            return $router->renderView('login');
    }


}
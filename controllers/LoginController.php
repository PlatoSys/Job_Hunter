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
    public function login(IRequest $request, Router $router)
    {

            return $router->renderView('login', );
    }


}
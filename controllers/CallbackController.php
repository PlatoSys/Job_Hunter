<?php


namespace app\controllers;


use app\IRequest;
use app\Router;

class CallbackController
{
    public function CallbackController(IRequest $request,Router $router){
        define('REQUIRED_FIELD_ERROR', 'This field is required');
        $data = $request->getBody();
        $errors = [];

        $params = [
            'errors' => $errors,
            'data' => $data
        ];

        return $router->renderView('g-callback', $params);
    }

}
<?php


namespace app\controllers;

use app\database\database;
use app\IRequest;
use app\Router;

class SavedController
{
    public function SavedController(IRequest $request, Router $router)
    {

        $data = $request->getBody();
        $errors = [];

        $db = new database();
        $insertion = new database();

        if(isset($_COOKIE['id'])){
            $db = $db->getGoogleID($_COOKIE['id']);
            if($db == false){
                $insertion->insertUser(ucfirst($_COOKIE['givenName']),ucfirst($_COOKIE['familyName']),$_COOKIE['email'],$_COOKIE['id']);
            }
        }
        $params = [
            'errors' => $errors,
            'data' => $data
        ];

        return $router->renderView('saved', $params);
    }
}
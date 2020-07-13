<?php


namespace app\controllers;


use app\database\database;
use app\IRequest;
use app\Router;

class CompanyController
{

    public function Company(IRequest $request,Router $router){
        session_start();
        define('REQUIRED_FIELD_ERROR', 'This field is required');
        $data = $request->getBody();
        $errors = [];


        $companydb = new database();
        $companydb = $companydb->getCompanies();

        $db = new database();
        $db = $db->getVacancies();

        $labels = [];
        foreach ($companydb as $key => $value){
            $temp = [];
            foreach ($db as $key1 => $value1){
                if($value['CompanyName'] == $value1['CompanyName'])
                {
                    array_push($temp ,$value1['Label']);
                }
            }
            $temp = array_unique($temp,SORT_LOCALE_STRING  );
            $labels[$value['CompanyName']] = $temp;
        }

        $params = [
            'errors' => $errors,
            'data' => $data,
            'companies' => $companydb,
            'labels' => $labels
        ];

        return $router->renderView('company', $params);
    }

}
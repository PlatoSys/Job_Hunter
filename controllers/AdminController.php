<?php


namespace app\controllers;


use app\database\database;
use app\IRequest;
use app\Router;

class AdminController
{
    public function AdminController(IRequest $request,Router $router){
        define('REQUIRED_FIELD_ERROR', 'This field is required');
        $data = $request->getBody();
        $errors = [];

        $params = [
            'errors' => $errors,
            'data' => $data
        ];

        $db = new database();

        if(isset($data['vacancyname']) and isset($data['vacancydetails']) and isset($data['city'])){
            $db->insertVacancy($data['vacancyname'],$data['vacancydetails'],$data['companynameforvacancy'],$data['city'],$data['label'],$data['startdate'],$data['enddate'],$data['salary'],$data['status']);
        }

        if(isset($data['companyname'])) {
            $db->insertCompany($data['companyname']);
            $filepath = "../public/Companylogos/" . $data['companyname'] . '.png';
            if (isset($_FILES["file"]["tmp_name"], $filepath)) {

                if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                    $temp = true;
                };
            }
        }

        return $router->renderView('/admin-panel' );

    }

}
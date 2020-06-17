<?php

namespace app\database;
use \PDO;


class database
{
    private PDO $pdo;

    public function __construct()
    {
            $config = require __DIR__.'/../config.php';
            $servername = $config['host'];
            $username = $config['username'];
            $password = $config['password'];
            $database = $config['database'];
            $this->pdo = new PDO("mysql:host=$servername;port=3306;dbname=$database", "$username", "$password");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    public function getVacancies(){
        $statement = $this->pdo->prepare("select * from works.Vacancies");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }



}
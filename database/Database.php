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

    public function insertVacancy($vacancyname,$vacancydetails,$companyname,$city,$label,$startdate,$enddate,$salary,$status){
        $statement = $this->pdo->prepare("insert into Vacancies (VacancyName,VacancyDetails,CompanyName,City,Label,VacancyStartDate,VacancyEndDate,Salary,Status) 
                                                    Values (:VacancyName,:VacancyDetails,:CompanyName,:City,:Label,:VacancyStartDate,:VacancyEndDate,:Salary,:Status)");
        $statement->bindValue(':VacancyName',$vacancyname);
        $statement->bindValue(':VacancyDetails',$vacancydetails);
        $statement->bindValue(':CompanyName',$companyname);
        $statement->bindValue(':City',$city);
        $statement->bindValue(':Label',$label);
        $statement->bindValue(':VacancyStartDate',$startdate);
        $statement->bindValue(':VacancyEndDate',$enddate);
        $statement->bindValue(':Salary',$salary);
        $statement->bindValue(':Status',$status);

        return $statement->execute();
    }

    public function getVacancies(){
        $statement = $this->pdo->prepare("select * from works.Vacancies order by Status desc, VacancyStartDate desc");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function removePastVacancies()
    {
        $statement = $this->pdo->prepare("delete from Vacancies  where VacancyEndDate = current_timestamp();");
        return $statement->execute();
    }
    public function insertCompany($companyname){
        $statement = $this->pdo->prepare("insert into Companies (CompanyName) 
                                                    Values (:CompanyName)");
        $statement->bindValue(':CompanyName',$companyname);

        return $statement->execute();
    }

    public function getCompanies(){
        $statement = $this->pdo->prepare("select * from works.Companies");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCurrentVacancies($companyName){
        $statement = $this->pdo->prepare("select * from works.Vacancies where CompanyName = :CompanyName");
        $statement->bindValue(':CompanyName',$companyName);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertUser($firstname,$surname,$email,$googleid)
    {
        $empty = '';
        $statement = $this->pdo->prepare("insert into Users (Firstname,Lastname,Email,SavedID,GoogleID) 
                                                    Values (:firstname,:lastname,:email,:empty,:googleid)");
        $statement->bindValue(':firstname',$firstname);
        $statement->bindValue(':lastname',$surname);
        $statement->bindValue(':email',$email);
        $statement->bindValue('empty',$empty);
        $statement->bindValue(':googleid',$googleid);
        return $statement->execute();
    }

    public function getGoogleID($googleid)
    {
        $statement = $this->pdo->prepare("select * from Users where GoogleID = :googleid");
        $statement->bindValue(':googleid',$googleid);
        $statement->execute();
        $user =  $statement->fetchAll(PDO::FETCH_ASSOC);
        if(empty($user)){
            return false;
        } else return true;
    }

}
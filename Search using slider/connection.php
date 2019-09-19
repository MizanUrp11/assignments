<?php
class Connection{
    public $conn;
    public function __construct(){
        $this->conn = new PDO('mysql:host=localhost;dbname=test','root','');
    }
    public function insertData($emp_name,$email,$salary,$city){
        $statement = $this->conn->prepare("INSERT INTO employee (emp_name,email,salary,city) VALUES(:emp_name,:email,:salary,:city)");
        $statement->execute(
        array(
        ':emp_name'=>$emp_name,
            ':email'=>$email,
            ':salary'=>$salary,
            ':city'=>$city
        )
        );
        echo "inserted";
    }
    
    public function getAll($query){
        $statement = $this->conn->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
}



?>
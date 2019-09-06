<?php

class Connection{
    public $conn;
    
    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=pdo",'root','');
    }
    
    public function insertMobile($name,$model,$type,$photo,$price){
        $statement = $this->conn->prepare("INSERT INTO mobile(name,model,type,photo,price) VALUES(:name,:model,:type,:photo,:price)");
        $statement->execute(
        array(
        ':name'=>$name,
        ':model'=>$model,
        ':type'=>$type,
        ':photo'=>$photo,
        ':price'=>$price
        )
        );
    }
    
    public function getAll($query){
        $statement = $this->conn->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
    
    public function searchMobileInPrice($query){
        $statement = $this->conn->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
    
    public function deleteData($query){
        $statement = $this->conn->prepare($query);
        $statement->execute();
    }
    
}

?>
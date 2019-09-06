<?php
session_start();
include 'connection.php';
$connection = new Connection;

if(isset($_GET['mark'])){
    $mark_val = $_GET['mark'];
    $the_id = $_GET['id'];
    
    $array = array(
        ':mark'=>$mark_val
        );
        $connection->update("UPDATE comments
SET mark = :mark WHERE id=$the_id",$array);
    header("location:index_admin.php");
}

?>

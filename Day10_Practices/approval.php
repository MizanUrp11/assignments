<?php
include 'connection.php';
$connection = new Connection;

$the_id = $_GET['id'];
$target_post = $connection->getAll("SELECT * FROM comments WHERE id=$the_id",null);

foreach($target_post as $res){
            $id = $res['id'];
            $comment = $res['comments'];
            $role = $res['role'];
            $status = $res['status'];
}

if(isset($_GET['approval'])){
    if($_GET['approval'] == 'Approved'){
        $comments = $comment;
        $status= 'Unapproved';
        $array = array(
            ':comments'=>$comments,
            ':role'=>'Annonymous',
            ':status'=>$status
        );

        $connection->update("UPDATE comments SET comments = :comments, role = :role, status = :status WHERE id=$the_id",$array);
    }elseif($_GET['approval'] == 'Unapproved'){
        $comment = $comment;
        $status= 'Approved';
        $array = array(
            ':comments'=>$comment,
            ':role'=>'Annonymous',
            ':status'=>$status
        );

        $connection->update("UPDATE comments SET comments = :comments, role = :role, status = :status WHERE id=$the_id",$array);


    }
        
    }

    header("location:index_admin.php");


?>

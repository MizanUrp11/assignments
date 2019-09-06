<?php
include 'connection.php';

$connection = new Connection;

$the_id = $_GET['id'];

$result = $connection->getAll("SELECT * FROM comments WHERE id=$the_id",null);

if(isset($_POST['approve'])){
    $comment = $_POST['comment'];
    $status= 'Approved';
    $array = array(
        ':comments'=>$comment,
        ':role'=>'Annonymous',
        ':status'=>$status
    );
    
    $connection->update("UPDATE comments SET comments = :comments, role = :role, status = :status WHERE id=$the_id",$array);
    
    header("location:index_admin.php");
    
    echo "Comment Approved";
}

foreach($result as $res){
            $id = $res['id'];
            $comment = $res['comments'];
            $role = $res['role'];
            $status = $res['status'];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>

<body>
    <form action="" method="post">
        <label for="comment">Comment</label><br>
        <textarea id="comment" name="comment"><?php echo $comment ?></textarea>
        <br>


        <input type="submit" value="Approve" name="approve">
    </form>
</body>

</html>

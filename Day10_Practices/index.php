<?php
session_start();


include 'connection.php';
$connection = new Connection;

$result = $connection->getAll("SELECT * FROM comments WHERE status='Approved'",null);
//print_r($result);

if(isset($_POST['submit'])){
    $comment = $_POST['comment'];
    $array = array(
        ':comments'=>$comment,
        ':role'=>'Annonymous',
        ':status'=>'Unapproved',
        ':mark'=>'Unimportant'
        
    );
    $connection->getAll("INSERT INTO comments(comments,role,status,mark) VALUES(:comments,:role,:status,:mark)",$array);
    
   
    
    echo "Your comment is under review. Please wait.<br>";
}

if(isset($_SESSION['logged_id'])){
    echo "<a href='index_admin.php'>Go to Admin</a>";
    echo "<a href='logout.php'>logout</a>";
}else{
    echo "<a href='login.php'>Login</a>";
    
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home page</title>
    <style>
        a {
            background-color: #dde0fd;
            color: #000;
            padding: 2px;
        }

    </style>
</head>

<body>

    <hr>
    <form action="" method="post">
        <label for="comment">Post Comment</label><br>
        <textarea id="comment" name="comment"></textarea>
        <br>
        <input type="submit" value="Send Comment" name="submit">
    </form>
    <hr>
    <hr>
    <table border="1">
        <tr>
            <td>id</td>
            <td>comment</td>
            <td>role</td>
            <td>status</td>
        </tr>

        <?php
        foreach($result as $res){
            $id = $res['id'];
            $comment = $res['comments'];
            $role = $res['role'];
            $status = $res['status'];
        ?>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $comment ?></td>
            <td><?php echo $role ?></td>
            <td><?php echo $status ?></td>





        </tr>

        <?php } ?>

    </table>




</body>

</html>

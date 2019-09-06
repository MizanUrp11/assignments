<?php
session_start();
include 'connection.php';
$connection = new Connection;

$result = $connection->getAll("SELECT * FROM comments",null);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home page</title>

    <style>
        .mark {
            background-color: greenyellow;
        }

    </style>

</head>

<body>

    <a href="logout.php">Logout</a>
    <hr>



    <table border="1">
        <tr>
            <td>id</td>
            <td>comment</td>
            <td>role</td>
            <td>status</td>
            <td>Edit</td>
            <td>Delete</td>
            <td>Mark</td>
        </tr>

        <?php
        foreach($result as $res){
            $id = $res['id'];
            $comment = $res['comments'];
            $role = $res['role'];
            $status = $res['status'];
            $mark = $res['mark'];
        ?>
        <tr>
            <td><?php 
            
                    if($mark == 'Important'){
                        echo "<p class='mark'>$id</p>";
                    }else{
                        echo "<p>$id</p>";
                    }
                
                
                ?></td>
            <td><?php echo $comment ?></td>
            <td><?php echo $role ?></td>
            <td><a href="approval.php?approval=<?php echo $status ?>&id=<?php echo $id ?>">

                    <?php
                if($status == 'Approved'){
                    echo "Unapprove";
                }else{
                    echo "Approve";
                }
                ?>

                </a></td>




            <td><a href="edit.php?id=<?php echo $id ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $id ?>">Delete</a></td>
            <td><a href="mark.php?mark=<?php
                
                    if($mark == 'Unimportant'){
                        echo "Important";
                    }else{
                        echo "Unimportant";
                        
                    }
                
                ?>&id=<?php echo $id ?>"><?php
                
                    if($mark == 'Unimportant'){
                        echo "Mark as Important";
                    }else{
                        echo "Mark as Unimportant";
                        
                    }
                    
                    
                ?></a></td>
        </tr>

        <?php } ?>

    </table>
    <hr>
    <hr>
    <hr>
    <a href="index.php">View All Approved Comments</a>

</body>

</html>

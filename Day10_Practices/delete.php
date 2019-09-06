<?php
include 'connection.php';
$connection = new Connection;

$the_id = $_GET['id'];

$connection->update("DELETE FROM comments WHERE id=$the_id",null);

header("location:index_admin.php");


?>

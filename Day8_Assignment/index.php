<?php
include "connection.php";




$connection = new Connection;



$image_folder = "photos/";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $model = $_POST['model'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $photo = $_FILES['image']['name'];
    echo "$photo";
    $photo_tmp = $_FILES['image']['tmp_name'];
    
    move_uploaded_file($photo_tmp, "photos/$photo");
    
    
    $connection->insertMobile($name,$model,$type,$photo,$price);
    
    
    
}


$result = $connection->getAll("SELECT * FROM mobile");

//delete operation

if(isset($_GET['delete'])){
    $the_id = $_GET['id'];
    $connection->deleteData("DELETE FROM mobile WHERE id=$the_id");
    header("Location: index.php");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment of Class8</title>
</head>
<body>
   
   
    <form action="" method="post" enctype="multipart/form-data">
        <select name="name">
          <option value="Nokia">Nokia</option>
          <option value="Symphony">Symphony</option>
          <option value="Micromax">Micromax</option>
          <option value="Samsung">Samsung</option>
        </select>
        Model: <input type="text" name="model" required><br>

        <label for="symbian">Symbian</label>
         <input id="symbian" type="radio" name="type" value="Symbian">

        <label for="java">java</label>
        <input id="java" type="radio" name="type" value="Java" required>
    <label for="and">Android</label>
        <input id="and" type="radio" name="type" value="Android" required><br>

        <input id="myRange" type="range" min="1500" max="75000" step="500" name="price"><span id="demo"></span> 

       <label for="Post_image">Post Image</label>
        <input type="file" id="Post_image" name="image">
       
       
        <input type="submit" value="submit" name="submit">

    </form>
    
    
    
    <hr>
    <hr>
    <hr>
    
    <table border="1">
       <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Model</td>
          <td>Type</td>
          <td>Photo</td>
          <td>Price</td>
          <td>Delete</td>
       </tr>
       
       
       <?php
        
        foreach($result as $res){
            $id = $res['id'];
            $name = $res['name'];
            $model = $res['model'];
            $type = $res['type'];
            $photo = $res['photo'];
            $price = $res['price'];
        ?>
            
       <tr>
          <td><?php echo $id ?></td>
          <td><?php echo $name ?></td>
          <td><?php echo $model ?></td>
          <td><?php echo $type ?></td>
          <td><?php echo "<img src='photos/$photo'>" ?></td>
          <td><?php echo $price ?></td>
          <td><?php echo "<a href='index.php?delete&id=$id'>Delete</a>" ?></td>
       </tr>
        <?php } ?>
        
        
    </table>
    
    <hr>
    <hr>
    <hr>
    
<?php
    global $search_price;
    global $searchMobile;
if(isset($_POST['search'])){
$search_price = $_POST['search_price'];
}
    $searchMobile = $connection->searchMobileInPrice("SELECT * FROM mobile WHERE price={$search_price}");
    
?>
   
   
    
    <form action="" method="post">
        <input id="myRange1" type="range" min="1500" max="75000" step="500" name="search_price"><span id="demo1"></span> 
        <input type="submit" value="search" name="search">
    </form>
    
    
    <table border="1">
        
            <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Model</td>
          <td>Type</td>
          <td>Price</td>
       </tr>
        




<?php
foreach($searchMobile as $mobile){
?>

<tr>
<td><?php echo $mobile['id'] ?></td>
<td><?php echo $mobile['name'] ?></td>
<td><?php echo $mobile['model'] ?></td>
<td><?php echo $mobile['type'] ?></td>
<td><?php echo $mobile['price'] ?></td>
</tr>

<?php } ?>


       
        
          
        
    </table>
    
    
    
    
   <script src="script.js"></script>
</body>
</html>
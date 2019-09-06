<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Assignment 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--
    
Your Next Class Tasks:

-Make a simple calculator with two input fields which can operate +,-,*,/ and print them. Use functions to do this. You can make a design if you want to

-Multiple File Upload one time. (optional) 
-->







    <?php

                       $result = "";
if(isset($_POST['add'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$result = $num1." + ".$num2." = ".addFunction($num1,$num2);
}
if(isset($_POST['subtract'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$result = $num1." - ".$num2." = ".subtractFunction($num1,$num2);
}
if(isset($_POST['multiply'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$result = $num1." x ".$num2." = ".multiplyFunction($num1,$num2);
}
if(isset($_POST['divide'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
    if($num2 > 0){
$result = $num1." / ".$num2." = ".divideFunction($num1,$num2);
        
    }else{
        $result = "Second number Must be greater than zero";
    }
} 
    
    

function addFunction($num1,$num2){
    return $num1 + $num2;
}

function subtractFunction($num1,$num2){
    return $num1 - $num2;
}

function multiplyFunction($num1,$num2){
    return $num1 * $num2;
}

function divideFunction($num1,$num2){
    return $num1 / $num2;
}




?>





    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3>Calculation with two numbers</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="number" class="form-control" name="num1" placeholder="Input first number">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="num2" placeholder="Input second number">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Result" value="<?php echo $result ?>">
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-info btn-lg" name="add" value="+">

                        <input type="submit" class="btn btn-info btn-lg" name="subtract" value="-">

                        <input type="submit" class="btn btn-info btn-lg" name="multiply" value="x">

                        <input type="submit" class="btn btn-info btn-lg" name="divide" value="/">
                    </div>

                </form>
            </div>
        </div>
    </div>




<?php
    if(isset($_POST['submit'])){
        $img = $_FILES['files'];
        if(!empty($img)){
            echo "<pre>";
//            print_r($img);
            
            
            $img_desc = reArrangeArray($img);
            
//            print_r($img_desc);
            foreach($img_desc as $val){
            $newName = mt_rand().".".explode("/",$val['type'])[1];
                move_uploaded_file($val['tmp_name'], "photos/".$newName);
                
            }
            
            
            
            echo "</pre>";
        }
    }                     

        function reArrangeArray($file){
            $file_array = array();
            $file_count = count($file['name']);
            $file_keys = array_keys($file);
            
            for($i = 0; $i < $file_count; $i++){
                foreach($file_keys as $val){
                    $file_array[$i][$val] = $file[$val][$i];
                }
            }
            return $file_array;
        }
    ?>




    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3>Multiple file upload</h3>
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="input-group mb-3">
                        <div class="custom-file">

                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="files[]">

                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="custom-file">

                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>

                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="files[]">

                        </div>
                    </div>
                    <input class="btn btn-warning" type="submit" name="submit">

                </form>
            </div>
        </div>
    </div>





<?php
    
    
    ?>



<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h3>Convert foot to Inch</h3>
            
            
            
            
            
            <?php
            if(isset($_POST['convert'])){
                $foot = $_POST['foot'];
                $result = $foot * 12;
            }
            
            ?>
            
            
            
            <form action="" method="post">
              <div class="form-group">
                <label for="formGroupExampleInput">Input Foot</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Foot" name="foot">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Result in Inch</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Result" name="result" value="<?php echo $result ?>">
              </div>
              <button type="submit" class="btn btn-primary" name="convert">Convert</button>
            </form>
            
            
        </div>
    </div>
</div>




<?php
    $fixedUsername = "admin123";
    $fixedPass = "12345";
                       $notice = "";
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username) || empty($username)){
            $notice = "Username and Password Must be filled";
        }elseif(strlen($username) <6){
             $notice = "Lenght of username must be equal or greater than six!";
        }elseif($username == $fixedUsername && $password == $fixedPass){
             $notice = "Welcome $username. You Logged in!";
        }else{
             $notice = "Username of password Missmatch!";
        }
    }
    
    
    ?>



<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
           <h3>Login</h3>
            <form action="" method="post">
  <div class="form-group row">
   <h3 class="col-md-6 text-danger"><?php echo $notice ?></h3>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Input Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>
  
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Log in</button>
    </div>
  </div>
</form>
        </div>
    </div>
</div>







<?php
    $notice = "";
    if(isset($_POST['submitimage'])){
        $image = $_FILES['image'];
//        var_dump(explode("/",$image["type"])[0]);
        
        if(!empty($image) && explode("/",$image["type"])[0] == "image"){
            if($image["size"] < 1024000){
                $name =  $image["name"];
                move_uploaded_file($image["tmp_name"], "photos/$name");
            }
        }else{
            $notice = "The file must be an image and less than 1MB";
        }
    }
    
    ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
           
           
            <form action="" method="post" enctype="multipart/form-data">
           <h3>Image upload</h3>
              <div class="form-group">
               <h6 class="text-danger"><?php echo $notice ?></h6>
               
               
               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
                </div>
                
                
                <button type="submit" name="submitimage" class="btn btn-primary">submit Image</button>
              </div>
            </form>
        </div>
    </div>
</div>

















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

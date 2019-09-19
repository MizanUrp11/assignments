<?php
include "connection.php";
$connection = new Connection;

if(isset($_POST['submit'])){
    $emp_name = $_POST['emp_name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];
    $city = $_POST['city'];
    
    $connection->insertData($emp_name,$email,$salary,$city);
    
}
$result = $connection->getAll("SELECT * FROM employee order by salary asc");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>day2</title>
    <link rel="stylesheet" href="css/jquery-ui.css">
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="emp_name">Employee name</label>
        <input type="text" name="emp_name" id="emp_name"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>
        <label for="salary">salary</label>
        <input type="number" name="salary" id="salary"><br>
        <select name="city" id="">
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Khulna">Khulna</option>
        </select><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <hr>
    <div id="slider"></div>
    <div>
        Range:<span id="range"></span>
    </div>
    <hr>
    <!--    ----------------------------------------------->
    <table id="emp_table" border="1" width=100% style="border-collapse:collapse">
        <tr>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Salary</th>
            <th>City</th>
        </tr>

        <?php
    foreach($result as $res){
        $emp_name = $res['emp_name'];
        $email = $res['email'];
        $salary = $res['salary'];
        $city = $res['city'];
    ?>
        <tr>
            <td><?php echo $emp_name?></td>
            <td><?php echo $email?></td>
            <td><?php echo $salary?></td>
            <td><?php echo $city?></td>
        </tr>

        <?php } ?>

    </table>


    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script>
        $(document).ready(function(){
            $('#slider').slider({
                range:true,
                min:1000,
                max:60000,
                values:[8000,50000],
                slide: function(event,ui){
                    var min = ui.values[0];
                    var max = ui.values[1];
                    $('#range').text('$' + ui.values[0] + '- $' + ui.values[1] );
                    $.ajax({
                        url:'getData.php',
                        type:'post',
                        data:{min:min,max:max},
                        success:function(response){
                            $('#emp_table tr:not(:first)').remove();
                                $('#emp_table').append(response);
                        }
                    })
                    
                }
            })
        })
    </script>

</body>

</html>

<?php
include "connection.php";
$connection = new Connection;

$min = $_POST['min'];
$max = $_POST['max'];

$result = $connection->getAll('SELECT * FROM employee WHERE salary>='.$min.' AND salary<='.$max.' order by salary asc');

$html = '';

foreach($result as $res){
    $emp_name = $res['emp_name'];
    $email = $res['email'];
    $salary = $res['salary'];
    $city = $res['city'];
    
    
    
    $html .='<tr>';
    $html .='<td>'.$emp_name.'</td>';
    $html .='<td>'.$email.'</td>';
    $html .='<td>'.$salary.'</td>';
    $html .='<td>'.$city.'</td>';
    $html .='</tr>';
}
echo $html;
?>

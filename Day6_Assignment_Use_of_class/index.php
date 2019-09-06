<?php include "Avenger.php" ?>
<?php include "IronMan.php" ?>
<?php include "CaptainAmerica.php" ?>
<?php include "Loki.php" ?>
<?php include "Thor.php" ?>
<?php include "Fight.php" ?>
<?php include "Thanos.php" ?>
<?php include "Hulk.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

$IronMan = new IronMan();
$IronMan->CommonActions("Loki","To Save People","Wind Speed");
$IronMan->attributes("Red","Yes","Yes","No");
$IronManFight = new Fight();
$IronManFight->fightBetween("IronMan","Loki");

echo "<br>";

$CaptainAmerica = new CaptainAmerica();
$CaptainAmerica->CommonActions("Thanos","Save the city","Running Speed");
$CaptainAmerica->attributes("Captain America","Blue","No","Yes","No");
$CaptainAmerica = new Fight();
$IronManFight->fightBetween("Captain America","Thanos");

echo "<br>";

$CaptainAmerica = new Thor();
$CaptainAmerica->CommonActions("Thor","Kill the aliens","Incredible");
$CaptainAmerica->attributes("Thor","Red","No","Yes","No");
$CaptainAmerica = new Fight();
$IronManFight->fightBetween("Thor","IronMan");

echo "<br>";

$CaptainAmerica = new Hulk();
$CaptainAmerica->CommonActions("Hulk","Kill the heros","Incredible");
$CaptainAmerica->attributes("Hulk","Green","Yes","No","No");
$CaptainAmerica = new Fight();
$IronManFight->fightBetween("Hulk","IronMan");

echo "<br>";

$CaptainAmerica = new Thanos();
$CaptainAmerica->CommonActions("Thanos","Kill the heros","Incredible");
$CaptainAmerica->attributes("Thanos","Gray","Yes","Yes","Yes");
$CaptainAmerica = new Fight();
$IronManFight->fightBetween("Thanos","All Avenger Heros");

echo "<br>";




?>



</body>
</html>
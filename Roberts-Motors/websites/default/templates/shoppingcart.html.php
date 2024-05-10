<?php
session_start();

$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');
?>

<h2>Shopping Cart</h2>

<?php

$LatestCars = $pdo->prepare('SELECT * FROM cars ORDER BY car_id ASC');
$LatestCars->execute();


?>
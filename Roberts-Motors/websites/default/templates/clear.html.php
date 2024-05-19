<?php
session_start();
//connection to database
$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

$clear = DeleteALL($pdo, 'cart');

header('Location: shoppingcart.php');

?>


Test


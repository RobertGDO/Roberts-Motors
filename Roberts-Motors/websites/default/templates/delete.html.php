<?php
session_start();
//connection to database
$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');



$id = $_GET["id"];

$database = new DatabaseTable();


$database->delete($pdo, 'cart', 'product_id', $id);


?>
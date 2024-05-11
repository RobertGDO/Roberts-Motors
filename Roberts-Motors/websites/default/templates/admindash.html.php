<?php
session_start();

$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');
?>

<p><a href="AddProduct.php"> Add Product</a></p>
<p> <a href="filter.php"> Check Unanswered Questions</a> </p>
<p> <a href="Admin_register.php"> Make new admin account</a> </p>
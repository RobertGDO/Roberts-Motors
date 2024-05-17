<?php

session_start();


$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');
echo "your transaction was successful";

$clear = DeleteALL($pdo, 'cart');

?>
<?php

session_start();

$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');
$find = findAll($pdo, 'cart', 'car_id', 'car_name', 'price');
$res1 = $pdo->prepare('SELECT sum(price) AS total FROM cart');
$res1->execute();
$total = 0;
$row = $res1->fetch(PDO::FETCH_ASSOC);
echo $row['total'];


foreach($find as $cart){
    echo '<p>'. 'Car Name:' . " " . $cart['car_name'].'</p>';
    echo '<p>'. 'Car Price:' . " " . $cart['price'].'</p>';
}
?>
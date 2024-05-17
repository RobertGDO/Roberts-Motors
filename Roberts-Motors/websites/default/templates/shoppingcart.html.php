<?php

session_start();

echo '<body class="shoppingCart">';
$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');
$find = findAll($pdo, 'cart', 'product_id', 'product_name', 'price');
$res1 = $pdo->prepare('SELECT sum(price) AS total FROM cart');
$res1->execute();
$total = 0;
$row = $res1->fetch(PDO::FETCH_ASSOC);


foreach ($find as $cart) {
    echo '<p>' . 'Car Name:' . " " . $cart['product_name'] . '</p>';
    echo '<p>' . 'Car Price:' . " " . $cart['price'] . '</p>';
    ?>
    <a href="delete.php?id=<?= $cart['product_id'] ?>">Remove Item</a>
    <?php
}

echo '<p>' . 'Total Amount:' . " " . $row['total'];
?>
<a href="clear.php">Clear Basket</a>
<a href="checkout.php">Checkout</a>
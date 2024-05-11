<?php

session_start();

$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');
$find = findAll($pdo, 'cars', 'car_id');

if(isset($_POST['add_to_cart'])){
    $product_id = $_POST['car_id'];
    $price = $_POST['car_price'];
    $product_name = $_POST['car_name'];

    $insert_product = $pdo->prepare('INSERT INTO cart (product_id, price, product_name) VALUES (:product_id, :price, :product_name)');
    $insert_product->execute(['product_id' => $product_id, 'price' => $price, 'product_name' => $product_name]);
}
?>

<hr />

<h2>Cars For Sale</h2>

<?php
echo '<ul class="CarProducts">';
foreach($find as $cars){
    echo '<li>';
?>
    <img src="<?php echo $cars['images'];?>" alt="<?php echo $cars['summary'];?>" width="200" height="200">

<?php       
    echo '<p>' . '£' . $cars['price'].'</p>';
    echo '<p>'. 'Car Make:' . " " . $cars['car_name'].'</p>';
    echo '<p>'. 'Engine:' . " " . $cars['engine'].'</p>';
    echo '<p>'. 'Details:' . " " . $cars['details'].'</p>';
    echo '<p>'. 'Summary: ' . " " . $cars['summary'].'</p>';
    echo '<form action="" method="POST">';
    echo '<input type="hidden" name="car_id" value="'.$cars['car_id'].'">';
    echo '<input type="hidden" name="car_price" value="'.$cars['price'].'">';
    echo '<input type="hidden" name="car_name" value="'.$cars['car_name'].'">';
    
    if (isset($_SESSION['loggedin'])) {
        echo '<input type="submit" name="add_to_cart" value="Add to cart"/>';
    }
    
    echo '</form>';
    echo '</li>';
}
echo '</ul>';
?>

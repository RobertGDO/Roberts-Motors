<?php

session_start();

$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

$model = '';
$make = '';

if(isset($_GET['model'])){
$model = $_GET["model"];
}
if(isset($_GET['make'])){
$make = $_GET["make"];
}
if(isset($_GET['Price'])){
$Price = $_GET["Price"];
}

if(isset($_GET['make'])){
$filterFindmake = find($pdo, 'cars', 'model', $make);
}
if(isset($_GET['model'])){
$filterFindmodel = find($pdo, 'cars', 'car_name', $model);
}
$find = findAll($pdo, 'cars', 'car_id');

if(isset($_POST['add_to_cart'])){
    $price = $_POST['car_price'];
    $product_name = $_POST['car_name'];

    $insert_product = $pdo->prepare('INSERT INTO cart (price, product_name) VALUES (:price, :product_name)');
    $insert_product->execute(['price' => $price, 'product_name' => $product_name]);
}
?>

<hr />

<h2>Cars For Sale</h2>

<?php
if(isset($_GET['make'])){
    echo '<ul class="CarProducts">';
    foreach($filterFindmake as $makes){
        echo '<li>';
    ?>
        <img src="<?php echo $makes['images'];?>" alt="<?php echo $makes['summary'];?>" width="200" height="200">
    
    <?php       
        echo '<p>' . '£' . $makes['price'].'</p>';
        echo '<p>'. 'Car Make:' . " " . $makes['car_name'].'</p>';
        echo '<p>'. 'Model: ' . " " . $makes['model'].'</p>';
        echo '<p>'. 'Engine:' . " " . $makes['engine'].'</p>';
        echo '<p>'. 'Details:' . " " . $makes['details'].'</p>';
        echo '<p>'. 'Summary: ' . " " . $makes['summary'].'</p>';
        echo '<form action="" method="POST">';
        echo '<input type="hidden" name="car_id" value="'.$makes['car_id'].'">';
        echo '<input type="hidden" name="car_price" value="'.$makes['price'].'">';
        echo '<input type="hidden" name="car_name" value="'.$makes['car_name'].'">';
        
        if (isset($_SESSION['loggedin']) || isset($_SESSION['adminloggedin']))  {
            echo '<input type="submit" name="add_to_cart" value="Add to cart"/>';
        }
    
        echo '</form>';
        echo '</li>';
    }
    echo '</ul>';
}
else if(isset($_GET['model'])){
    echo '<ul class="CarProducts">';
    foreach($filterFindmodel as $models){
        echo '<li>';
    ?>
        <img src="<?php echo $models['images'];?>" alt="<?php echo $models['summary'];?>" width="200" height="200">
    
    <?php       
        echo '<p>' . '£' . $models['price'].'</p>';
        echo '<p>'. 'Car Make:' . " " . $models['car_name'].'</p>';
        echo '<p>'. 'Model: ' . " " . $models['model'].'</p>';
        echo '<p>'. 'Engine:' . " " . $models['engine'].'</p>';
        echo '<p>'. 'Details:' . " " . $models['details'].'</p>';
        echo '<p>'. 'Summary: ' . " " . $models['summary'].'</p>';
        echo '<form action="" method="POST">';
        echo '<input type="hidden" name="car_id" value="'.$models['car_id'].'">';
        echo '<input type="hidden" name="car_price" value="'.$models['price'].'">';
        echo '<input type="hidden" name="car_name" value="'.$models['car_name'].'">';
        
        if (isset($_SESSION['loggedin']) || isset($_SESSION['adminloggedin']))  {
            echo '<input type="submit" name="add_to_cart" value="Add to cart"/>';
        }
        
        echo '</form>';
        echo '</li>';
    }
    echo '</ul>';
}

else if(!$model && !$make){
echo '<ul class="CarProducts">';
foreach($find as $cars){
    echo '<li>';
?>
    <img src="<?php echo $cars['images'];?>" alt="<?php echo $cars['summary'];?>" width="200" height="200">

<?php       
    echo '<p>' . '£' . $cars['price'].'</p>';
    echo '<p>'. 'Car Make:' . " " . $cars['car_name'].'</p>';
    echo '<p>'. 'Model: ' . " " . $cars['model'].'</p>';
    echo '<p>'. 'Engine:' . " " . $cars['engine'].'</p>';
    echo '<p>'. 'Details:' . " " . $cars['details'].'</p>';
    echo '<p>'. 'Summary: ' . " " . $cars['summary'].'</p>';
    echo '<form action="" method="POST">';
    echo '<input type="hidden" name="car_id" value="'.$cars['car_id'].'">';
    echo '<input type="hidden" name="car_price" value="'.$cars['price'].'">';
    echo '<input type="hidden" name="car_name" value="'.$cars['car_name'].'">';
    
    if (isset($_SESSION['loggedin']) || isset($_SESSION['adminloggedin']))  {
        echo '<input type="submit" name="add_to_cart" value="Add to cart"/>';
    }
    
    echo '</form>';
    echo '</li>';
}
echo '</ul>';
}
?>

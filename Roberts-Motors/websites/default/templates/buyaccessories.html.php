<?php

session_start();

$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

$findA = findAll($pdo, 'accessories', 'accessories_id');


if(isset($_POST['add_to_cart'])){
        $product_id = $_POST['accessories_id'];
        $price = $_POST['price'];
        $product_name = $_POST['accessory_name'];
    
        $insert_product = $pdo->prepare('INSERT INTO cart (product_id, price, product_name) VALUES (:product_id, :price, :product_name)');
        $insert_product->execute(['product_id' => $product_id, 'price' => $price, 'product_name' => $product_name]);
    }
    ?>


<hr />

<h2>Buy Some Accessories!</h2>


<?php
echo '<ul class="CarProducts">';
foreach($findA as $Accessories){

echo '<li>';
?>
    <img src=<?php echo $Accessories['image'];?> alt=<?php echo $Accessories['description'];?>  width="200" 
     height="250">

<?php       
        echo '<p>' . '£' . $Accessories['price'].'</div>';

        echo '<p>'. 'Car Make:' . " " . $Accessories['accessory_name'].'</p>';
        
        echo '<p>'. 'Details:' . " " . $Accessories['description'].'</h3>';
        echo '<form action="" method="POST">';
        echo '<input type="hidden" name="accessories_id" value="'.$Accessories['accessories_id'].'">';
        echo '<input type="hidden" name="price" value="'.$Accessories['price'].'">';
        echo '<input type="hidden" name="accessory_name" value="'.$Accessories['accessory_name'].'">';
        
        if (isset($_SESSION['loggedin'])) {
            echo '<input type="submit" name="add_to_cart" value="Add to cart"/>';
        }
        
        echo '</form>';


echo '</li>';
}
echo '</ul>';
?>
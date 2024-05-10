

<?php

session_start();

$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

$find = findAll($pdo, 'cars', 'car_id');


?>

<hr />

<h2>Cars For Sale</h2>


<?php
echo '<ul class="CarProducts">';
foreach($find as $cars){

echo '<li>';
?>
    <img src=<?php echo $cars['images'];?> alt=<?php echo $cars['summary'];?>  width="200" 
     height="200">

<?php       
        echo '<p>' . '£' . $cars['price'].'</div>';

        echo '<p>'. 'Car Make:' . " " . $cars['car_name'].'</p>';

        echo '<p>'. 'Engine:' . " " . $cars['engine'].'</p>';
        
        echo '<p>'. 'Details:' . " " . $cars['details'].'</h3>';

        echo '<p>'. 'Summary: ' . " " . $cars['summary'].'</h3>';

        if (isset($_SESSION['loggedin'])) {
        ?>
        <a href="Reviews.php?id=<?=$product['productid']?>"> Ask a question</a>
        <?php
        }
echo '</li>';
}
echo '</ul>';
?>
<?php

session_start();

$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

$findA = findAll($pdo, 'accessories', 'accessories_id');


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

echo '</li>';
}
echo '</ul>';
?>
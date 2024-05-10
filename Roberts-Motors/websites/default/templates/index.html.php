<?php
session_start();


echo '<!DOCTYPE html>';

$server = 'mysql'; 
$username = 'student'; 
$password = 'student'; 

$schema = 'roberts_motors'; 

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password); 

$stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');

if (isset($_SESSION['loggedin'])) {
    echo "Welcome back " . $_SESSION['name'];}
    else {}

?>
        <h2>Latest 10 Cars Added!</h2>
<?php

$LatestCars = $pdo->prepare('SELECT * FROM cars ORDER BY car_id DESC LIMIT 10');
$LatestCars->execute();


echo '<ul class="CarProducts">';
foreach($LatestCars as $cars){

echo '<li>';
?>
    <img src=<?php echo $cars['images'];?> alt=<?php echo $cars['summary'];?>  width="200" 
     height="200">

<?php       
        echo '<p>' . '£' . $cars['price'].'</div>';

        echo '<p>'. 'Car Make:' . " " . $cars['car_name'].'</p>';

        echo '<p>'. 'Engine:' . " " . $cars['engine'].'</p>';
        
        echo '<p>'. 'Details:' . " " . $cars['details'].'</p>';

        echo '<p>'. 'Summary: ' . " " . $cars['summary'].'</p>';

echo '</li>';
}
echo '</ul>';
?>

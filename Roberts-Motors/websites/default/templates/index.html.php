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
        
        
        <h2>Top 10 best selling cars</h2>
        <p>Polo</p>
        <img src="images/Polo.png" alt=" The picture is of the best discounted car.">
        <p>Polo</p>
        <img src="images/Polo.png" alt=" The picture is of the best discounted car.">
    </main>

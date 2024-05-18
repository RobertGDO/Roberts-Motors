<?php
session_start();
//connection to database
$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

if (isset($_GET['model'])) {
    $model = $_GET['model'];

    $stmt = $pdo->prepare('SELECT DISTINCT make FROM cars WHERE car_name = :model');
    $stmt->execute(['model' => $model]);
    $makes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $result = array();
    foreach ($makes as $make){
        $result[] = array('make' => $make['make']);
    }


    echo json_encode($result);
}
?>
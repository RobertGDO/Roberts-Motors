<?php
session_start();
//connection to database
$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

if(isset($_POST['addcar'])) {
    //check username and password
    $addcar = [
        'price' => $_POST['price'],
        'car_name' => $_POST['car_name'],
        'engine' => $_POST['engine'],
        'details' => $_POST['details'],
        'summary' => $_POST['summary'],
        'images' => $_POST['images'],
        'model' => $_POST['model']
    ];

    insert($pdo, 'cars', $addcar);
    echo "Car added";
}
else{
?>
<form action="AddCar.php" method="POST">
    <label>price:</label>
    <label>Brand Of Car:</label>
    <input type="text" name = "price" />
    <input type="text" name="car_name"/>
    <label>Engine Size:</label>
    <label>details of car:</label>
    <input type="text" name = "engine" />
    <input type="text" name="details"/>
    <label>Summary of car:</label>
    <label>Image URL of car:</label>
    <input type="text" name="summary"/>
    <input type="text" name="images"/>
    <label>Model Of Car:</label>
    <input type="text" name = "model" />
    <input type="submit" name="addcar" value="Add Car"/>

</form>
<?php
}
?>

<?php
session_start();
//connection to database
$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

if(isset($_POST['addaccesories'])) {
    //check username and password
    $addcar = [
        'price' => $_POST['price'],
        'accessory_name' => $_POST['accessory_name'],
        'engine' => $_POST['engine'],
        'details' => $_POST['details'],
        'summary' => $_POST['summary'],
        'images' => $_POST['images']
    ];

    insert($pdo, 'cars', $addcar);
    echo "Car added";
}
else{
?>
<form action="AddAccessory.php" method="POST">
    <label>price:</label>
    <label>accessory_name</label>
    <input type="text" name = "price" />
    <input type="text" name="accessory_name"/>
    <label>Description:</label>
    <label>Image URL of Accessory:</label>
    <input type="text" name="description"/>
    <input type="text" name="images"/>
    <input type="submit" name="addcar" value="Add Car"/>

</form>
<?php
}
?>

<?php
session_start();
//connection to database
$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

if(isset($_POST['addaccessory'])) {
    //check username and password
    $addaccessory = [
        'price' => $_POST['price'],
        'accessory_name' => $_POST['accessory_name'],
        'description' => $_POST['description'],
        'image' => $_POST['image']
    ];

    insert($pdo, 'accessories', $addaccessory);
    echo "Accessory added";
}
else{
?>
<form action="AddAccessory.php" method="POST">
    <label>Price:</label>
    <label>Accessory name</label>
    <input type="text" name = "price" />
    <input type="text" name="accessory_name"/>
    <label>Description:</label>
    <label>Image URL of Accessory:</label>
    <input type="text" name="description"/>
    <input type="text" name="image"/>
    <input type="submit" name="addaccessory" value="Add a accessory"/>

</form>
<?php
}
?>

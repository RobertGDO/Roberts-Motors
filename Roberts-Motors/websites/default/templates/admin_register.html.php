<?php
session_start();
//connection to database
$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

if(isset($_POST['adminregister'])) {
    //check username and password
    $register = [
        'username' => $_POST['username'],
        'password' => sha1($_POST['username'] . $_POST['password'])
    ];

    insert($pdo, 'admin_login', $register);
    echo "Admin Account added";
}
else{
?>
<form action="Admin_register.php" method="POST">
    <label>Username:</label>
    <label>Password:</label>
    <input type="text" name = "username" />
    <input type="password" name="password"/>
    <input type="submit" name="adminregister" value="Create New Admin Account"/>

</form>
<?php
}
?>
<?php
session_start(); /*Starting a session:
A session stores information in variables and can be accessed across other pages, when required.
A session is not stored on the hardware, instead it is stored in the browser.
 */

echo '<!DOCTYPE html>';

$server = 'mysql'; #The name of the server that is being connected to
$username = 'student'; #The username for the server
$password = 'student'; #The password for the server

$schema = 'roberts_motors'; #The name of the sql schema

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password); #The prepared statement to connect the database

$messageQuery = $pdo->prepare('SELECT * FROM users');


if (isset($_POST['register'])) {
    $stmt = $pdo->prepare('INSERT INTO users (username, password)
                VALUES (:username, :password)');

    $values = [
        'username' => $_POST['username'],
        'password' => $_POST['password'],
    ];

    $stmt->execute($values);

    if ($stmt->rowCount() > 0) {
        echo '<p> Account registered, please return to 
            <a href="login.php">login</a>
            </p>'
    ;} else {
        echo 'Email is already in use, please try another username';
    }
}
?>

        <h1>Register</h1>

        <hr />

        <form action="" method="POST">
            <label>Username</label>
            <label>Password</label>
            <input type="username" name="username" />
            <input type="password" name="password" />

            <input type="submit" name="register" value="register" />
        </form>
        <hr />


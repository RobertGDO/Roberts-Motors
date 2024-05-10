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

$stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password'); #The prepared statement that selects the email and password from the users table

if (isset($_POST['login'])) { #If the login button is pressed

    $values = [
        'username' => $_POST['username'],
        'password' => $_POST['password']

    ];
    $stmt->execute($values); #Execute the prepared statement
    $_SESSION['loggedin'] = true; #Set the session variable of 'loggedin' as true
}

?>


        <h1>Login Page</h1>

        <hr />

        <form action="" method="POST">
            <label>username</label>
            <label>Password</label>
            <input type="username" name="username" />
            <input type="password" name="password" />

            <input type="submit" name="login" value="Login" />

            <?php if ($stmt->rowCount() > 0) {
                echo 'Login successful';
            } else {
                echo 'Sorry your username and password could not be found';
            }

            echo '<p id="END">Not a user? <a href="https://v.je/register.php">Register</a></p> '; #If you are not a user click here and you will be taken to the register page
            ?>

        </form>

        <hr />
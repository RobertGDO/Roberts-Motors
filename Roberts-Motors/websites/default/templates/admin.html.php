<?php
session_start();
//connection to database
$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');

if(isset($_POST['login'])) {
    //check username and password
    $stmt = $pdo->prepare('SELECT * FROM admin_login WHERE username = :username AND password = :password');
    $values = [
            'username' => $_POST['username'],
            'password' => sha1($_POST['username'] . $_POST['password'])
    ];

    $stmt->execute($values);
    
    if($stmt->rowCount() > 0){
        $_SESSION['adminloggedin'] = true;
        echo '<p> Successful Admin Sign in </p>';
        $_SESSION['username'] = $_POST['username'];
    }
    else{
        echo '<h4> Wrong Username or Password</h4> <a href="AdminLogin.php"> Try Again</a>';

    }

}


else{
?>

<form action="adminlogin.php" method="POST">
    <label>Username:</label>
    <label>Password:</label>
    <input type="text" name = "username" />
    <input type="password" name="password"/>
    <input type="submit" name="login" value="Log In"/>

</form>

<?php
}
?>

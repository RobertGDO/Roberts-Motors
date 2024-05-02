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
        echo '<p>Account registered, please return to login</p>';
    } else {
        echo 'Email is already in use, please try another username';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="images/Polo.png" type="image/x-icon">
    <link rel="stylesheet" href="main.css" media="screen">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 800px)">
    <link rel="stylesheet" href="desktop.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Eczar">
    <script src="https://kit.fontawesome.com/e5a0970892.js" crossorigin="anonymous"></script>
</head>

<body id="clicked">

    <header>
        <a href="#clicked" class="on showNav"></a>
        <a href="#" class="off showNav"></a>
        <h1>Rashid Motors</h1>
    </header>

    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="buycars.php">Buy Cars</a>
                <ul>
                    <li>Search</li>
                    <li>Filter</li>
                    <!-- once logined in to customer portal make this seen: -->
                    <li>Saved searches</li>
                </ul>
            </li>

            <li>
                <a href="leasecars.php">Lease Cars</a>
                <ul>
                    <li>Cars available</li>
                    <li>Credit check</li>
                </ul>
            </li>
            <li>
                <a href="shoppingcart.php">Shopping cart</a>
                <ul>
                    <li>Saved cars</li>
                </ul>
            </li>
            <li>
                <a href="login.php">Login</a>
                <ul>
                    <li>Sign in</li>
                    <li>Register</li>
                    <li>Admin Login</li>
                </ul>
            </li>
        </ul>
    </nav>

    <main>

        <h1>Register</h1>

        <hr />

        <form action="" method="POST">
            <label>Email</label>
            <label>Password</label>
            <input type="username" name="username" />
            <input type="password" name="password" />

            <input type="submit" name="register" value="register" />
        </form>
        <hr />


    </main>



    <footer>
        <div>
            <a href="https://www.facebook.com/Roxie008/" target=_blank><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://uk.linkedin.com/in/roxanne-bolton-9211681a3" target=_blank><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.instagram.com/roxiemaico/?next=%2F" target=_blank><i class="fa-brands fa-instagram"></i></a>
        </div>

        <div>&copy; Rashid Motors 2024</div>
    </footer>
</body>

</html>
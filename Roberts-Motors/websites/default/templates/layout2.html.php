<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="images/RM.png" type="image/x-icon">
    <link rel="stylesheet" href="main.css" media="screen">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 800px)">
    <link rel="stylesheet" href="desktop2.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Eczar">
    <script src="https://kit.fontawesome.com/e5a0970892.js" crossorigin="anonymous"></script>
</head>

<body id="clicked">

    <header>
        <a href="#clicked" class="on showNav"></a>
        <a href="#" class="off showNav"></a>
        <img src="images/RM.png" alt=" The picture is of the logo.">
        <div style="display: flex; flex-direction: column;justify-content:center;">
            <h2 style="margin: 0;">Robert Motors</h2>
            <p style="margin: 0;">Driving happiness</p>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="about.php">About Us</a>
            </li>
            <li>
                <a href="buycars.php">Buy Cars</a>
                <ul>
                        <li>New Cars</li>
                        <li>Used Cars </li>

                    </ul>
            </li>
            
            <li>
                <a href="leasecars.php">Lease Cars</a>

            </li>
            <li>
                <a href="shoppingcart.php">Shopping cart</a>
                <ul>
                    <li>Saved cars</li>
                </ul>
            </li>
            <li>
            <?php if (isset($_SESSION['loggedin'])) {
                    echo '<a href="logout.php">Logout</a>' ;}
                 else {
                    echo '<a href="login.php">Login</a>
        <ul>
            <li>Sign in</li>
            <li>Register</li>
            <li>Admin Login</li>}'
                    ;
                } ?>
                </ul>
            </li>
        </ul>
    </nav>
    <main>
    <?=$templateVars['output']?>
    </main>
  
    <footer>
        <div>
            <a href="https://www.facebook.com/Roxie008/" target=_blank><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://uk.linkedin.com/in/roxanne-bolton-9211681a3" target=_blank><i
                    class="fa-brands fa-linkedin"></i></a>
            <a href="<a href="https://www.instagram.com/robertmotorsgp/" target=_blank><i" target=_blank><i
                    class="fa-brands fa-instagram"></i></a>
        </div>
    
        <div>&copy; Roberts Motors 2024</div>
    </footer>
</body>

</html>
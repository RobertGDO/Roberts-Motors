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
        <p>The hairlines on us</p>
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
    <?=$templateVars['output']?>
    </main>
    <aside>
        <p>Welcome to Rashid motors. Where you can find the best cars at a resonable price.</p>
    </aside>
    <footer>
        <div>
            <a href="https://www.facebook.com/Roxie008/" target=_blank><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://uk.linkedin.com/in/roxanne-bolton-9211681a3" target=_blank><i
                    class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.instagram.com/roxiemaico/?next=%2F" target=_blank><i
                    class="fa-brands fa-instagram"></i></a>
        </div>
    
        <div>&copy; Rashid Motors 2024</div>
    </footer>
</body>

</html>
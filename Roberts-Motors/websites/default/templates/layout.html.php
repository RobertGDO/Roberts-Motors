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
    <link rel="stylesheet" href="desktop.css" media="screen and (min-width: 800px)">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Eczar">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
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
    <aside>
    <p>Filter search</p>
        <ul>
            <li>Make
                <ul>
                    <li>Fiat</li>
                    <li>Volkswagen</li>
                    <li>Ford</li>
                    <li>Vauxhall</li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Model
                <ul>
                    <li>500</li>
                    <li>Polo</li>
                    <li>Golf</li>
                    <li>Corsa</li>
                    <li>Fiesta</li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Mileage
                <ul>
                    <li>From</li>
                    <li>To</li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Gearbox
                <ul>
                    <li>Automatic</li>
                    <li>Maunal</li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Fuel type
                <ul>
                    <li>Petrol</li>
                    <li>Diesel</li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Engine size
                <ul>
                    <li>1.0</li>
                    <li>1.2</li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Doors
                <ul>
                    <li>5</li>
                    <li>3</li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Colour
                <ul>
                    <li>Blue</li>
                    <li>White</li>
                </ul>
            </li>
        </ul>
        <ul>
            <li>Seats
                <ul>
                    <li>2</li>
                    <li>4</li>
                    <li>5</li>
                </ul>
            </li>
        </ul>
    </aside>
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
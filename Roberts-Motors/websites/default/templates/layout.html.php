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
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->
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
            </li>
            
            <li>
                <a href="buyaccessories.php">Buy Accessories</a>
            </li>
            <li>
                <a href="about.php">About Us</a>
            </li>
            <?php if (isset($_SESSION['loggedin'])) {
               ?> 
                <li><a href="shoppingcart.php">Shopping cart</a></li>
                <li><a href="logout.php">Logout</a></li> 
                <?php
                }elseif (isset($_SESSION['adminloggedin'])) {
                    ?>
                    <li><a href="Admindash.php">Admin</a></li>
                    <li><a href="shoppingcart.php">Shopping cart</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php
                } else {
                    echo '<a href="login.php">Login</a>'
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
    <h2>Filter search</h2>
    <form action="/search-cars" method="GET">
            <label for="make">Make</label>
            <select id="make" name="make">
                <option value="">Any</option>
                <option value="fiat">Fiat</option>
                <option value="volkswagon">Volkswagon</option>
                <option value="ford">Ford</option>
                <option value="vauxhall">Vauxhall</option>
            </select>
            <label for="model">Model</label>
            <select id="model" name="model">
                <option value="">Any</option>
                <option value="500">500</option>
                <option value="polo">Polo</option>
                <option value="golf">Golf</option>
                <option value="corsa">Corsa</option>
                <option value="fiesta">Fiesta</option>
               
            </select>
            <label for="mileage-max">Mileage (Max)</label>
            <input type="number" id="mileage-max" name="mileage_max" placeholder="Max Mileage">
            <label for="fuel-type">Fuel Type</label>
            <select id="fuel-type" name="fuel_type">
                <option value="">Any</option>
                <option value="petrol">Petrol</option>
                <option value="diesel">Diesel</option>
                <option value="electric">Electric</option>
                <option value="hybrid">Hybrid</option>
            </select>
         
            <label for="transmission">Transmission</label>
            <select id="transmission" name="transmission">
                <option value="">Any</option>
                <option value="manual">Manual</option>
                <option value="automatic">Automatic</option>
            </select>
            
            <button type="submit">Search</button>
        </form>
    </aside>
    <footer>
        <div>
            <a href="https://www.facebook.com/Roxie008/" target=_blank><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://uk.linkedin.com/in/roxanne-bolton-9211681a3" target=_blank><i
                    class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.instagram.com/robertmotorsgp/" target=_blank><i" target=_blank><i
                    class="fa-brands fa-instagram"></i></a>
        </div>
    
        <div>&copy; Roberts Motors 2024</div>
    </footer>
</body>

</html>
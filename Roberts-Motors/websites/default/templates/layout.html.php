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
        <div class="dropdown-btn">Make<i class="fa fa-caret-down"></i></div>
            <div class="dropdown-container">
                <select id="make" name="make">
                        <option value="">Any</option>
                        <option value="fiat">Fiat</option>
                        <option value="volkswagon">Volkswagon</option>
                        <option value="ford">Ford</option>
                        <option value="vauxhall">Vauxhall</option>
                </select>
            </div>
        </div>
        <div class="dropdown-btn">Model<i class="fa fa-caret-down"></i></div>
            <div class="dropdown-container">
                <select id="model" name="model">
                <option value="">Any</option>
                <option value="500">500</option>
                <option value="polo">Polo</option>
                <option value="golf">Golf</option>
                <option value="corsa">Corsa</option>
                <option value="fiesta">Fiesta</option>
                </select>
            </div>
        </div>    
        <div class="dropdown-btn">Mileage<i class="fa fa-caret-down"></i></div>
            <div class="dropdown-container">
                <select id="model" name="model">
                <option value="">Any</option>
                <option value="500">0-10,000</option>
                <option value="polo">10,001-20,000</option>
                <option value="golf">20,001-30,000</option>
                <option value="corsa">30,001-40,000</option>
                <option value="fiesta">40,001-50,000</option>
                <option value="500">50,001-60,000</option>
                <option value="polo">60,001-70,000</option>
                <option value="golf">70,001-80,000</option>
                <option value="corsa">80,001-90,000</option>
                <option value="fiesta">90,001-100,000</option>
                <option value="polo">100,001-110,000</option>
                <option value="golf">110,001-120,000</option>
                <option value="corsa">120,001-130,000</option>
                <option value="fiesta">130,001-140,000</option>
                <option value="500">140,001-150,000</option>
                <option value="polo">150,001-160,000</option>
                <option value="golf">160,001-170,000</option>
                <option value="corsa">170,001-180,000</option>
                <option value="fiesta">180,001-190,000</option>
                </select>
            </div>
        </div>
        <div class="dropdown-btn">Fuel Type<i class="fa fa-caret-down"></i></div>
            <div class="dropdown-container">
                <select id="fuel-type" name="fuel-type">
                <option value="">Any</option>
                <option value="petrol">Petrol</option>
                <option value="diesel">Diesel</option>
                <option value="electric">Electric</option>
                <option value="hybrid">Hybrid</option>
                </select>
            </div>
        </div>
        <div class="dropdown-btn">Transmission<i class="fa fa-caret-down"></i></div>
            <div class="dropdown-container">
                <select id="transmission" name="transmission">
                <option value="">Any</option>
                <option value="manual">Manual</option>
                <option value="automatic">Automatic</option>
                </select>
            </div>
        </div>
        <button type="submit">Search</button>
        </form>
        <script>
            //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
        </script>
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
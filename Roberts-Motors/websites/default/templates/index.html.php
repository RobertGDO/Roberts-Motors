<?php
session_start();


echo '<!DOCTYPE html>';

$server = 'mysql';
$username = 'student';
$password = 'student';

$schema = 'roberts_motors';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);

$stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');

if (isset($_SESSION['loggedin'])) {
        echo "Welcome back " . $_SESSION['name'];
} else {
}

echo '<body class="indexGrid">';

echo '<div class="banner-img">';

$selectedModel = isset($_GET['model']) ? $_GET['model'] : ''; 


?>

<form action="buycars.php" method="GET">
    <label>Model:</label>
    <label>Make:</label>
    <select id="model" name="model" onchange="updateMakes()">
                <option value="">Any</option>
                <?php
                $model = findAll($pdo, 'cars', 'car_name');
                foreach($model as $result){ ?>

                <option value="<?=$result['car_name']?>"><?=$result['car_name']?></option>
                <?php echo $result['car_name'];?>
                <?php } ?>
        </select>
        <select id="make" name="make" disabled>
                <option value="" selected disabled hidden>Any</option>
        </select>
    
    <label>Max Price:</label>
    <input type="text" name = "Price" />
    
    <input type="submit" name="index_search" value="Search!"/>

</form>


<script>
function updateMakes() {
    var model = document.getElementById('model').value;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_makes.php?model=' + model, true);
    xhr.onload = function() {
        if (this.status == 200) {
            console.log(this.responseText);
            var makes = JSON.parse(this.responseText);
            var makeSelect = document.getElementById('make');
            makeSelect.innerHTML = '<option value="" selected disabled hidden>Any</option>';
            makes.forEach(function(make) {
                var option = document.createElement('option');
                option.value = make.make;
                option.textContent = make.make;
                makeSelect.appendChild(option);
            });
            makeSelect.removeAttribute('disabled');
        }
    };
    xhr.send();
}
</script>

<?php
echo '</div>';
?>
<h2>Latest 10 Cars Added!</h2>
<?php

$LatestCars = $pdo->prepare('SELECT * FROM cars ORDER BY car_id DESC LIMIT 10');
$LatestCars->execute();


echo '<ul class="CarProducts">';
foreach ($LatestCars as $cars) {

        echo '<li>';
        ?>
        <img src=<?php echo $cars['images']; ?> alt=<?php echo $cars['summary']; ?> width="200" height="200">

        <?php
        echo '<p>' . '£' . $cars['price'] . '</p>';

        echo '<p>' . 'Car Make:' . " " . $cars['car_name'] . '</p>';

        echo '<p>' . 'Engine:' . " " . $cars['engine'] . '</p>';

        echo '<p>' . 'Details:' . " " . $cars['details'] . '</p>';

        echo '<p>' . 'Summary: ' . " " . $cars['summary'] . '</p>';

        echo '</li>';
}
echo '</ul>';
?>
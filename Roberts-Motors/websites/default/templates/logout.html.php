<?php
session_start(); // Start the session

// Check if the user is logged in
if(isset($_SESSION['loggedin'])) {
    // If logged in, destroy the session
    session_destroy();
    // Redirect to login page or any other page you want
    header("Location: login.php");
    exit();
} else {
    // If the user is not logged in, you can redirect them to the login page or do something else
    header("Location: login.php");
    exit();
}
?>

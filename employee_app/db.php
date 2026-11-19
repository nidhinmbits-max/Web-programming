
<?php

$host = "localhost";
$user = "root";       // Default username in XAMPP/WAMP
$pass = "";           // Default password is empty
$dbname = "company_db";

// Create database connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check database connection
if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}

?>

<?php
/* Connection with the DB */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techlaunch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

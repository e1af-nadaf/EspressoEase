<?php
date_default_timezone_set('Asia/Kolkata');

$servername = "localhost";
$username = "root"; // Default WAMP username
$password = "poiuytrewq_9960691390"; // Default WAMP password (empty)
$database = "espressoease"; // Your actual database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


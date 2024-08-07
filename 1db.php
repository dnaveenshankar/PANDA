<?php
// Database credentials
$servername = "sql206.infinityfree.com";
$username = "if0_37038758";
$password = "Bbtvka6ZCzdH";
$database = "if0_37038758_bgmi_registration";
$port = 3306; // Optional, usually the default is 3306

// Create a new connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the character set to UTF-8
$conn->set_charset("utf8");

?>

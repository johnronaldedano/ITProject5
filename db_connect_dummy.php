<?php
$servername = "localhost";       // usually "localhost"
$username = "your_username_here"; // e.g., "root"
$password = "your_password_here"; // e.g., ""
$database = "your_database_here"; // e.g., "dbms2"

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

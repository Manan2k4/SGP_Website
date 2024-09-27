<?php
$servername = "localhost"; // Default host for XAMPP MySQL
$username = "root";        // Default XAMPP MySQL username
$password = "";            // Default XAMPP MySQL password (usually empty)
$dbname = "my_pc_store";   // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

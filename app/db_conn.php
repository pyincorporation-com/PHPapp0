<?php
// Database connection credentials
$servername = "mysql-service"; // Use the service name for external access
$username = "gabriel";
$password = "namespaxe@123";
$dbname = "testdb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// Configuration
$host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "electricity_observer";

// Create a new database connection
$conn = new mysqli($host, $db_username, $db_password, $db_database);

// Connection successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
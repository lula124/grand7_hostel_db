<?php
// config/db.php

// Database configuration
define('DB_HOST', 'localhost');      // Change if your DB host is different
define('DB_USER', 'root');           // Your DB username
define('DB_PASS', '');               // Your DB password
define('DB_NAME', 'grand7_hostel_db'); // Your DB name

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set charset to utf8mb4 for better Unicode support
$conn->set_charset("utf8mb4");

// Usage example in other PHP files:
// require_once('../config/db.php');
// $result = $conn->query("SELECT * FROM Room");
?>

<?php
// Configuration file with database credentials
require_once 'config.php';

// Enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create a function for database connection
function connectToDatabase() {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        throw new Exception('Database connection failed: '. mysqli_connect_error());
    }
    return $conn;
}

// Connect to the database
$conn = connectToDatabase();
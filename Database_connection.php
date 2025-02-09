<?php
// First, verify that the required MySQL extension is available
// The mysqli extension is needed for database connectivity in PHP
// If not loaded, script execution will stop with an error message
if (!extension_loaded('mysqli')) {
    die("The mysqli extension is not loaded. Please enable it in your PHP configuration.");
}

// Database connection configuration parameters
$servername = "localhost";     // Database server address (local server in this case)
$username = "root";           // MySQL username for authentication
$password = ""; //This is my actual MySQL password for authentication
$dbname = "userdatabase";     // Name of the database we want to connect to

// Establish database connection using try-catch for error handling
try {
    // Create new mysqli connection object using connection parameters
    // This initiates the actual connection attempt to the database server
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verify if the connection was successful
    // mysqli->connect_error contains error message if connection failed
    if ($conn->connect_error) {
        // If connection fails, throw an exception with error details
        // This will be caught by the catch block below
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    // Handle any connection errors by terminating script execution
    // Display error message with specific details about what went wrong
    die("Database connection error: " . $e->getMessage());
}
?>

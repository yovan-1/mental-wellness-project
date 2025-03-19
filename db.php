<?php
// Database connection details (choose the appropriate one)
$servername = "localhost";  // Change to your local server or RDS endpoint
$username = "root";         // Change if needed
$password = "";             // Change if needed
$dbname = "stress_management"; // Local database

// For RDS:
$servername_rds = "groupnine-database.c1ymcim2gqjk.eu-north-1.rds.amazonaws.com"; // RDS endpoint
$username_rds = "admin";    // RDS username
$password_rds = "group_9123"; // RDS password
$dbname_rds = "groupnine-database"; // RDS database name

// Choose the appropriate connection based on your environment
$conn = new mysqli($servername, $username, $password, $dbname);
// Or use RDS connection
// $conn = new mysqli($servername_rds, $username_rds, $password_rds, $dbname_rds);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
<?php

// High Cohesion - Separate Database Functions

function getAllUsers($conn) {

    return $conn->query("SELECT * FROM users");

}
function getUserById($conn, $userId) {

    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");

    $stmt->bind_param("i", $userId);

    $stmt->execute();

    return $stmt->get_result()->fetch_assoc();

}

?>
// Structural Measurement: Log Query Execution Time
function executeQueryWithLogging($conn, $query) {
    $startTime = microtime(true);
    $result = $conn->query($query);
    $endTime = microtime(true);
    
    $executionTime = $endTime - $startTime;
    error_log("Query executed in: " . $executionTime . " seconds");

    return $result;
}

// Example Usage of logging query time
executeQueryWithLogging($conn, "SELECT * FROM users");
?>

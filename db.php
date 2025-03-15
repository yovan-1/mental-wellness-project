<?php
$servername = "groupnine-database.c1ymcim2gqjk.eu-north-1.rds.amazonaws.com";  // RDS endpoint
$username = "admin";  // RDS username
$password = "group_9123";  // RDS password
$dbname = "groupnine-database";  // The database name you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


<?php
// Structural Measurement: Log Query Execution Time
function executeQueryWithLogging($conn, $query) {
    $startTime = microtime(true);
    $result = $conn->query($query);
    $endTime = microtime(true);
    
    $executionTime = $endTime - $startTime;
    error_log("Query executed in: " . $executionTime . " seconds");

    return $result;
}

// Example Usage:
executeQueryWithLogging($conn, "SELECT * FROM users");
?>
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

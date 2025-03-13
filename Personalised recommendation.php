<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "<p>Please <a href='login.php'>log in</a> to access personalized recommendations.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Recommendations</title>
</head>
<body>
    <h1>Personalized Recommendations</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?>! Here are your personalized recommendations:</p>
    <!-- Content for personalized recommendations will go here -->
</body>
</html>

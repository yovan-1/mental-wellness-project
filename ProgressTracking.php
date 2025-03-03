<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "<p>Please <a href='login.php'>log in</a> to track your progress.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Tracking</title>
</head>
<body>
    <h1>Progress Tracking</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?>! Track your progress here:</p>
    <!-- Progress tracking elements such as charts or tables go here -->
</body>
</html>

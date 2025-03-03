<?php
// Start a new or resume existing session to maintain user state
session_start();

// Check if user is logged in by verifying session user_id exists
// If not logged in, redirect to login page and stop script execution
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Check if an ID parameter was passed in the URL
if (isset($_GET['id'])) {
    // Construct the video filename using the ID parameter
    // Format will be 'Video_[id].mp4'
    $filename = 'Video_' . $_GET['id'] . '.mp4';
    
    // Build the complete filepath by combining directory and filename
    // Videos are stored in 'My assignments 2' directory
    $filepath = 'My assignments 2/' . $filename;
    
    // Verify that the requested file actually exists
    if (file_exists($filepath)) {
        // Set headers to force file download instead of displaying in browser
        // application/octet-stream tells browser this is a binary file to download
        header('Content-Type: application/octet-stream');
        
        // Content-Disposition: attachment causes browser to download rather than display
        // Also specifies the filename that will be suggested to user
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        
        // Read the file contents and output them to the browser
        // This initiates the file download
        readfile($filepath);
        exit(); // Stop script execution after file is sent
    }
}

// If file doesn't exist or no ID provided, redirect back to forums page
header('Location: SupportForums.php');
?>
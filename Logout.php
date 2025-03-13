<?php
// Start the PHP session to access existing session data
session_start();

// Clear all session variables by unsetting the $_SESSION array
// This removes all data stored in the current session
session_unset();

// Completely destroy the session and all its data
// This invalidates the session ID and removes the session file from the server
session_destroy();

// Redirect the user to the home page (Mental22.php) after successful logout
// The header() function sends a raw HTTP header to tell the browser to navigate to a new URL
// This ensures the user can't access protected pages after logging out
header("Location: Mental22.php");

// Terminate the script execution immediately after sending the redirect header
// This prevents any further code from executing and ensures the redirect happens
exit();
?>

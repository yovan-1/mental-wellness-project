<?php
// Check if the form was submitted using POST method
// This prevents direct access to this script and ensures data is coming from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect and sanitize input data from the form
    // trim() removes whitespace from beginning and end
    // htmlspecialchars() converts special characters to HTML entities to prevent XSS attacks
    $name = htmlspecialchars(trim($_POST['name']));       // Sanitize the name field
    $email = htmlspecialchars(trim($_POST['email']));     // Sanitize the email field
    $subject = htmlspecialchars(trim($_POST['subject'])); // Sanitize the subject field
    $message = htmlspecialchars(trim($_POST['message'])); // Sanitize the message field

    // Set up the email parameters
    $to = "Giftmartha47@gmail.com";  // Recipient email address
    
    // Create the email subject by concatenating a prefix with the user's subject
    $subject = "New Message from Contact Form: " . $subject;
    
    // Construct the email body with sender's details and message
    // \n creates new lines in the email for better readability
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    // Set the From header to show sender's email address
    $headers = "From: $email";

    // Attempt to send the email using PHP's mail() function
    // mail() returns true if the mail was accepted for delivery, false otherwise
    if (mail($to, $subject, $body, $headers)) {
        // If mail() returns true, show success message to user
        echo "Message sent successfully!";
    } else {
        // If mail() returns false, show error message to user
        echo "Failed to send message. Please try again.";
    }
} else {
    // If someone tries to access this script directly without POST data
    // Display an error message
    echo "Invalid request method.";
}
?>
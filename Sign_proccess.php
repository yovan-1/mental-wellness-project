<?php
// Include the database connection file which contains credentials and connection setup
include('Database_connection.php');

// Enable comprehensive error reporting for debugging purposes
// Display errors that occur during script execution
ini_set('display_errors', 1);
// Display errors that occur during PHP startup
ini_set('display_startup_errors', 1);
// Report all PHP errors
error_reporting(E_ALL);
// Debug: Print all POST data to see what was submitted
print_r($_POST);

// Verify that the form was submitted using POST method
// This prevents direct access to this script without form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract user input from POST data
    // These variables store the user's registration information
    $fullName = $_POST['full_name'];    // Get the full name from form
    $email = $_POST['email'];           // Get the email address from form
    $password = $_POST['password'];      // Get the password from form

    // Input validation
    // Check if any required fields are empty
    if(empty($fullName) || empty($email) || empty($password)) {
        die("Please fill in all fields");  // Stop execution if any field is empty
    }

    // Validate email format using PHP's built-in filter
    // Ensures the email follows proper format (example@domain.com)
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");  // Stop execution if email format is invalid
    }

    // Check for duplicate email addresses in the database
    // Prepare a parameterized query to prevent SQL injection
    $checkEmail = $conn->prepare("SELECT email FROM Users WHERE email = ?");
    $checkEmail->bind_param("s", $email);  // Bind email parameter ('s' indicates string type)
    $checkEmail->execute();                // Execute the query
    $result = $checkEmail->get_result();   // Get the result set
    if($result->num_rows > 0) {
        die("Email already registered");    // Stop if email exists
    }
    $checkEmail->close();  // Close the prepared statement

    // Hash the password for secure storage
    // Using BCRYPT algorithm which is currently considered secure
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Prepare SQL statement for inserting new user
        // Using prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO Users (full_name, email, password_hash) VALUES (?, ?, ?)");
        if(!$stmt) {
            // If prepare fails, throw exception with error details
            throw new Exception("Prepare failed: " . $conn->error);
        }

        // Bind parameters to prepared statement
        // 'sss' indicates all three parameters are strings
        $stmt->bind_param("sss", $fullName, $email, $passwordHash);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // On successful registration
            echo "Account created successfully!";
            // Redirect to login page after 2 second delay
            header("refresh:2;url=Login.html");
        } else {
            // If execution fails, throw exception with error details
            throw new Exception("Execute failed: " . $stmt->error);
        }

        // Clean up by closing the prepared statement
        $stmt->close();
    } catch (Exception $e) {
        // Handle any exceptions that occurred during the database operations
        die("Error: " . $e->getMessage());
    }

    // Close the database connection
    $conn->close();
}
?>

<?php
/**
 * Authenticates a user by verifying their username and password against the database
 * 
 * @param string $username The username to authenticate
 * @param string $password The password to verify
 * @return boolean Returns true if authentication successful, false otherwise
 */
function authenticate($username, $password) {
    // Access the global PDO database connection object
    global $pdo;
    
    try {
        // Prepare a secure SQL statement using parameter binding to prevent SQL injection
        // This query selects all user data where the username matches
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        
        // Execute the prepared statement with the username parameter
        // The username is passed as an array to bind to the :username placeholder
        $stmt->execute(['username' => $username]);
        
        // Fetch the user's data as an associative array
        // Returns false if no user is found
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify that:
        // 1. A user was found ($user is not false)
        // 2. The provided password matches the stored hash using PHP's secure password_verify function
        if ($user && password_verify($password, $user['password'])) {
            return true; // Authentication successful
        }
        
        return false; // Authentication failed - either user not found or password incorrect
        
    } catch (PDOException $e) {
        // If any database errors occur during the process (connection issues, query problems, etc.)
        // We fail securely by returning false rather than exposing error details
        return false;
    }
}
?> 
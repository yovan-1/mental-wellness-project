<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic meta tags for character encoding and responsive viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back! | Mental Health Support</title>
</head>
<!-- Main body with custom styling for a centered, gradient background layout -->
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: linear-gradient(135deg, #2E7D32, #1976D2); background-size: 400% 400%; animation: gradient 15s ease infinite;">
    <!-- Main container div with glass-morphism effect -->
    <div style="border-radius: 20px; padding: 30px; background-color: rgba(255, 255, 255, 0.95); width: 350px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); backdrop-filter: blur(10px);">
        <!-- Welcome header and subtext -->
        <h2 style="color: #2E7D32; text-align: center; font-size: 28px; margin-bottom: 25px;">Welcome Back!</h2>
        <p style="text-align: center; color: #666; margin-bottom: 20px;">Your journey to wellness continues here</p>
        
        <?php
        // Start PHP session to maintain user state across pages
        session_start();
        // Include database connection file
        include('Database_connection.php');
        
        // Check if form was submitted via POST method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input from form
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            // Prepare SQL statement to prevent SQL injection
            // Query searches for user with matching email
            $stmt = $conn->prepare("SELECT * FROM Users WHERE email = ?");
            $stmt->bind_param("s", $email);  // Bind email parameter as string
            $stmt->execute();  // Execute the query
            $result = $stmt->get_result();  // Get query results
            
            // Check if exactly one user was found
            if($result->num_rows === 1) {
                $user = $result->fetch_assoc();  // Get user data as associative array
                // Verify password hash matches stored hash
                if(password_verify($password, $user['password_hash'])) {
                    // Set session variables upon successful login
                    $_SESSION['logged_in'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['full_name'] = $user['full_name'];
                    // Redirect to home page
                    header("Location: Mental22.php");
                    exit();
                } else {
                    // Display error for invalid credentials
                    echo "<p style='color: red; text-align: center;'>Invalid email or password!</p>";
                }
            } else {
                // Display error for invalid credentials
                echo "<p style='color: red; text-align: center;'>Invalid email or password!</p>";
            }
            $stmt->close();  // Close the prepared statement
        }
        ?>

        <!-- Login form with POST method -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <!-- Email input field container -->
            <div style="position: relative; margin-bottom: 20px;">
                <label for="email" style="color: #2E7D32; font-weight: 600;">Email Address</label><br>
                <input type="email" id="email" name="email" style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 16px; transition: all 0.3s; margin-top: 5px;" placeholder="Enter your email" required>
            </div>
            
            <!-- Password input field container -->
            <div style="position: relative; margin-bottom: 20px;">
                <label for="password" style="color: #2E7D32; font-weight: 600;">Password</label><br>
                <input type="password" id="password" name="password" style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 16px; transition: all 0.3s; margin-top: 5px;" placeholder="Enter your password" required>
            </div>
            
            <!-- Remember me checkbox and forgot password link -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <div>
                    <input type="checkbox" id="remember" name="remember" style="accent-color: #2E7D32;">
                    <label for="remember" style="color: #666;">Remember Me</label>
                </div>
                <a href="#" style="text-decoration: none; color: #1976D2; font-weight: 600; transition: color 0.3s;">Forgot Password?</a>
            </div>
            
            <!-- Submit button with hover effects -->
            <button type="submit" style="width: 100%; padding: 14px; background-color: #2E7D32; color: white; border: none; border-radius: 10px; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.3s; box-shadow: 0 4px 15px rgba(46, 125, 50, 0.2);">Sign In</button>
            
            <!-- Sign up link for new users -->
            <div style="text-align: center; margin-top: 25px;">
                <p style="color: #666; margin-bottom: 5px;">New to Mental Health Support?</p>
                <a href="SignUp.php" style="text-decoration: none; color: #1976D2; font-weight: 600; transition: color 0.3s;">Create an Account</a>
            </div>
        </form>
    </div>

    <!-- CSS styles for animations and interactions -->
    <style>
        /* Background gradient animation keyframes */
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        /* Input field focus styles */
        input:focus {
            border-color: #2E7D32 !important;
            outline: none;
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
        }
        /* Button hover animation */
        button:hover {
            background-color: #1B5E20;
            transform: translateY(-2px);
        }
    </style>
    <script>
    document.querySelector('form').addEventListener('submit', function(event) {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        if (!email || !password) {
            alert('Please fill in all fields.');
            event.preventDefault();
        }
    });
</script>
<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        if (!email || !password) {
            alert('Please fill in all fields.');
            event.preventDefault();
        }
    });
</script>

</body>
</html>

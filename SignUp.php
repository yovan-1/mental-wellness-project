<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Our Mental Health Community | Sign Up</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: linear-gradient(135deg, #2E7D32, #1976D2); background-size: 400% 400%; animation: gradient 15s ease infinite;">
    <div style="border-radius: 20px; padding: 40px; background-color: rgba(255, 255, 255, 0.95); width: 400px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); backdrop-filter: blur(10px);">
        <h2 style="color: #2E7D32; text-align: center; font-size: 32px; margin-bottom: 10px;">Begin Your Journey</h2>
        <p style="text-align: center; color: #666; margin-bottom: 25px;">Join our supportive community today</p>
        
        <form action="Sign_proccess.php" method="POST" id="signupForm">
            <?php

// CFG Representation: Logging Validation Flow

function validateSignup($email, $password, $confirmPassword) {

    error_log("Starting signup validation...");



    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        error_log("Invalid email format");

        return "Invalid email format.";

    }

    

    if ($password !== $confirmPassword) {

        error_log("Passwords do not match");

        return "Passwords do not match.";

    }



    error_log("Signup validation successful!");

    return "Validation passed.";

}

?>
            <div style="margin-bottom: 20px;">
                <label for="name" style="color: #2E7D32; font-weight: 600;">Full Name</label>
                <input type="text" id="name" name="full_name" style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 16px; transition: all 0.3s; margin-top: 5px;" placeholder="Enter your full name">
            </div>
            
            <div style="margin-bottom: 20px;">
                <label for="email" style="color: #2E7D32; font-weight: 600;">Email Address</label>
                <input type="email" id="email" name="email" style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 16px; transition: all 0.3s; margin-top: 5px;" placeholder="Enter your email">
            </div>
            
            <div style="margin-bottom: 20px;">
                <label for="password" style="color: #2E7D32; font-weight: 600;">Create Password</label>
                <input type="password" id="password" name="password" style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 16px; transition: all 0.3s; margin-top: 5px;" placeholder="Choose a strong password">
            </div>
            
            <div style="margin-bottom: 20px;">
                <label for="re-password" style="color: #2E7D32; font-weight: 600;">Confirm Password</label>
                <input type="password" id="re-password" name="re-password" style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 16px; transition: all 0.3s; margin-top: 5px;" placeholder="Re-enter your password">
            </div>
            
            <div style="margin-bottom: 25px;">
                <input type="checkbox" id="terms" name="terms" style="accent-color: #2E7D32;">
                <label for="terms" style="color: #666;">I agree to the <a href="#" style="color: #1976D2; text-decoration: none; font-weight: 600;">Terms of Use</a> and <a href="#" style="color: #1976D2; text-decoration: none; font-weight: 600;">Privacy Policy</a></label>
            </div>
            
            <button type="submit" style="width: 100%; padding: 14px; background-color: #2E7D32; color: white; border: none; border-radius: 10px; font-size: 18px; font-weight: 600; cursor: pointer; transition: all 0.3s; box-shadow: 0 4px 15px rgba(46, 125, 50, 0.2);">Create Account</button>
            
            <div style="text-align: center; margin-top: 25px;">
                <p style="color: #666; margin-bottom: 5px;">Already have an account?</p>
                <a href="Login.php" style="text-decoration: none; color: #1976D2; font-weight: 600; transition: color 0.3s;">Sign In Here</a>
            </div>
        </form>
    </div>

    <style>
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        input:focus {
            border-color: #2E7D32 !important;
            outline: none;
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
        }
        button:hover {
            background-color: #1B5E20;
            transform: translateY(-2px);
        }
    </style>

    <script>
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch('Sign_proccess.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data); // Show the response from PHP
                if(data.includes("successfully")) {
                    window.location.href = 'Login.php'; // Redirect to login page on success
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred during signup');
            });
        });
    </script>
</body>
</html>

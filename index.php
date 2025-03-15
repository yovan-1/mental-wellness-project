<!DOCTYPE html>
<html lang="en" style="box-sizing: border-box; margin: 0; padding: 0;">
<head>
    <!-- Basic meta tags for character encoding and viewport settings -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Support and Awareness</title>
</head>
<?php
// Measuring Software Morphology: Counting Modules
function countModules($components) {
    return count($components);
}

// Example Usage:
$components = ["Home", "About", "Support", "Assessment", "Contact"];
echo "Total modules: " . countModules($components);
?>

<!-- Main body with background image and styling -->
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: center; background-image: url(background1.svg); background-repeat: no-repeat; background-size: cover; background-blend-mode: darken; line-height: 1.6; color: #333; background-attachment: fixed;">
    <?php 
    // Start the session and handle session initialization
    session_start();
    // Clear session data if user is not logged in
    if(!isset($_SESSION['logged_in'])) {
        session_unset();
        session_destroy();
        session_start();
    }
    // Get username from session if it exists
    $username = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    ?>
    <!-- Fixed header with site title -->
    <h1 style="color: #2E7D32; position: fixed; top: 0; width: 100%; background-color: rgba(255, 160, 122, 0.95); z-index: 1000; padding: 15px 0; box-shadow: 0 2px 5px rgba(0,0,0,0.1); font-size: 2.2em;">Welcome to Mental Health Support <br>and Awareness Website</h1>
    <!-- Spacing for fixed header -->
    <br><br><br><br><br><br><br>

    <!-- Mobile menu toggle button (hidden by default) -->
    <button style="display: none; background-color: #2E7D32; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 10px auto;" onclick="toggleMenu()">Menu ☰</button>
    
    <!-- Navigation bar -->
    <nav id="navbar" style="margin: 20px 0; background-color: rgba(255, 255, 255, 0.9); padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <a href="Mental22.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s; display: inline-block;">Home</a> |
        <a href="AboutUs.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s; display: inline-block;">About Us</a> |
        <a href="SupportForums.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s; display: inline-block;">Support Forums</a> |
        <a href="Contact us.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s; display: inline-block;">Contact Us</a> |
        <a href="Tools.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s; display: inline-block;">Tools</a>
    </nav>

    <!-- Search form section -->
    <div style="margin: 20px 0;">
        <form action="search.php" method="GET">
            <input type="text" name="query" placeholder="Search..." style="padding: 10px; width: 80%; max-width: 300px; border-radius: 25px; border: 2px solid #4CAF50; outline: none; font-size: 16px; margin-bottom: 10px;" required>
            <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 25px; cursor: pointer; font-size: 16px; transition: background-color 0.3s;">Search</button>
        </form>
    </div>

    <!-- Main content section with images -->
    <section style="margin: 40px auto; max-width: 1200px; padding: 20px; background-color: rgba(255, 255, 255, 0.7); border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <p style="font-size: 32px; font-weight: bold; color: #2E7D32; margin-bottom: 30px;">You Are Not Alone</p>
        <img src="Mental1.svg" alt="Mental health support image 1" style="width: 300px; height: 300px; margin: 10px; border-radius: 50%; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: transform 0.3s; max-width: 100%;">
        <img src="Mental2.svg" alt="Mental health support image 2" style="width: 300px; height: 300px; margin: 10px; border-radius: 50%; box-shadow: 0 4px 8px rgba(0,0,0,0.2); transition: transform 0.3s; max-width: 100%;">
    </section>

    <!-- Login/Signup section - shows different content based on login status -->
    <section style="margin: 30px;">
        <?php if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true): ?>
            <button onclick="location.href='Login.php'" style="padding: 12px 30px; margin: 10px; color: white; border: none; border-radius: 25px; font-size: 18px; cursor: pointer; transition: transform 0.3s, background-color 0.3s; box-shadow: 0 2px 5px rgba(0,0,0,0.2); background-color: #1976D2;">Login</button>
            <button onclick="location.href='SignUp.php'" style="padding: 12px 30px; margin: 10px; color: white; border: none; border-radius: 25px; font-size: 18px; cursor: pointer; transition: transform 0.3s, background-color 0.3s; box-shadow: 0 2px 5px rgba(0,0,0,0.2); background-color: #2E7D32;">Signup</button>
        <?php else: ?>
            <p>Welcome, <?php echo htmlspecialchars($username); ?></p>
            <button onclick="location.href='Logout.php'" style="padding: 12px 30px; margin: 10px; color: white; border: none; border-radius: 25px; font-size: 18px; cursor: pointer; transition: transform 0.3s, background-color 0.3s; box-shadow: 0 2px 5px rgba(0,0,0,0.2); background-color: #d32f2f;">Logout</button>
        <?php endif; ?>
    </section>

    <!-- Footer section with links and copyright -->
    <footer style="margin-top: 40px; padding: 30px; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px 10px 0 0; box-shadow: 0 -2px 5px rgba(0,0,0,0.1);">
        <p style="font-size: 20px; color: #2E7D32; font-weight: 600;">Your Safe Space for Mental Health Awareness and Support</p>
        <a href="#" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Find a therapist</a>
        <p style="margin-top: 20px; font-weight: 600;">Follow us on:</p>
        <a href="www.twitter.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Twitter</a> |
        <a href="www.facebook.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Facebook</a> |
        <a href="www.instagram.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Instagram</a>
        <p style="color: #666;">© 2024 Mental Health Support. All rights reserved.</p>
    </footer>

    <script>
        // Function to handle sticky navbar behavior
        window.onscroll = function() {stickyNavbar()};
        
        var navbar = document.getElementById("navbar");
        var heading = document.querySelector("h1");
        var sticky = heading.offsetHeight;
        
        function stickyNavbar() {
            // Make navbar sticky when scrolling past header
            if (window.pageYOffset >= sticky) {
                navbar.style.position = "fixed";
                navbar.style.top = "140px";
                navbar.style.width = "100%";
                navbar.style.zIndex = "999";
            } else {
                navbar.style.position = "";
                navbar.style.top = "";
                navbar.style.width = "";
                navbar.style.zIndex = "";
            }
        }

        // Function to toggle mobile menu
        function toggleMenu() {
            var navbar = document.getElementById("navbar");
            if(navbar.style.display === "none" || navbar.style.display === "") {
                navbar.style.display = "block";
            } else {
                navbar.style.display = "none";
            }
        }

        // Function to handle responsive design
        function checkScreenSize() {
            // Mobile view adjustments
            if(window.innerWidth <= 768) {
                document.querySelector("button").style.display = "block";
                document.querySelector("h1").style.fontSize = "1.8em";
                document.querySelector("#navbar").style.display = "none";
            }
            // Small mobile view adjustments
            if(window.innerWidth <= 480) {
                document.querySelector("h1").style.fontSize = "1.5em";
                var buttons = document.querySelectorAll("button");
                buttons.forEach(function(button) {
                    button.style.width = "80%";
                    button.style.margin = "10px auto";
                });
            }
        }

        // Event listeners for responsive design
        window.addEventListener('resize', checkScreenSize);
        checkScreenSize();
    </script>
</body>
</html>

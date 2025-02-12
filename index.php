<?php
// Start the session and handle session initialization before any output
session_start();
// Clear session data if user is not logged in 
if(!isset($_SESSION['logged_in'])) {
    if(session_status() === PHP_SESSION_ACTIVE) {
        session_unset();
        session_destroy();
    }
    session_start();
}
// Get username from session if it exists
$username = isset($_SESSION['email']) ? $_SESSION['email'] : '';
?>
<!DOCTYPE html>
<html lang="en" style="box-sizing: border-box; margin: 0; padding: 0;">
<head>
    <!-- Basic meta tags for character encoding and viewport settings -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Support and Awareness</title>
    <style>
        /* Property-oriented measurements using rem and viewport units */
        :root {
            --header-height: 8rem;
            --spacing-unit: 1rem;
            --max-content-width: 75rem;
            --border-radius-sm: 0.625rem;
            --border-radius-lg: 0.9375rem;
            --shadow-sm: 0 0.125rem 0.3125rem rgba(0,0,0,0.1);
            --shadow-md: 0 0.25rem 0.5rem rgba(0,0,0,0.1);
            --shadow-lg: 0 0.25rem 0.75rem rgba(0,0,0,0.2);
            --font-size-sm: 1rem;
            --font-size-md: 1.125rem;
            --font-size-lg: 1.375rem;
            --font-size-xl: 2rem;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            background-image: url(background1.svg);
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: darken;
            line-height: 1.6;
            color: #333;
            background-attachment: fixed;
            font-size: var(--font-size-md);
        }

        h1 {
            color: #2E7D32;
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgba(255, 160, 122, 0.95);
            z-index: 1000;
            padding: calc(var(--spacing-unit) * 0.9375) 0;
            box-shadow: var(--shadow-sm);
            font-size: var(--font-size-xl);
        }

        nav {
            margin: calc(var(--spacing-unit) * 1.25) 0;
            background-color: rgba(255, 255, 255, 0.9);
            padding: calc(var(--spacing-unit) * 0.9375);
            border-radius: var(--border-radius-sm);
            box-shadow: var(--shadow-sm);
        }

        nav a {
            text-decoration: none;
            color: #1976D2;
            margin: 0 calc(var(--spacing-unit) * 0.9375);
            font-weight: 600;
            transition: color 0.3s;
            display: inline-block;
        }

        .search-form input {
            padding: calc(var(--spacing-unit) * 0.625);
            width: 80%;
            max-width: 18.75rem;
            border-radius: 1.5625rem;
            border: 0.125rem solid #4CAF50;
            outline: none;
            font-size: var(--font-size-md);
            margin-bottom: calc(var(--spacing-unit) * 0.625);
        }

        .search-form button {
            padding: calc(var(--spacing-unit) * 0.625) calc(var(--spacing-unit) * 1.25);
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 1.5625rem;
            cursor: pointer;
            font-size: var(--font-size-md);
            transition: background-color 0.3s;
        }

        section {
            margin: calc(var(--spacing-unit) * 2.5) auto;
            max-width: var(--max-content-width);
            padding: calc(var(--spacing-unit) * 1.25);
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
        }

        section img {
            width: 18.75rem;
            height: 18.75rem;
            margin: calc(var(--spacing-unit) * 0.625);
            border-radius: 50%;
            box-shadow: var(--shadow-lg);
            transition: transform 0.3s;
            max-width: 100%;
        }

        footer {
            margin-top: calc(var(--spacing-unit) * 2.5);
            padding: calc(var(--spacing-unit) * 1.875);
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: var(--border-radius-lg) var(--border-radius-lg) 0 0;
            box-shadow: var(--shadow-sm);
        }

        @media screen and (max-width: 48rem) { /* 768px */
            :root {
                --font-size-xl: 1.8rem;
            }
            
            button {
                display: block;
            }
            
            #navbar {
                display: none;
            }
        }

        @media screen and (max-width: 30rem) { /* 480px */
            :root {
                --font-size-xl: 1.5rem;
            }
            
            button {
                width: 80%;
                margin: calc(var(--spacing-unit) * 0.625) auto;
            }
        }
    </style>
    <script>
        // Measure page load time
        const startTime = performance.now();
        window.addEventListener('load', () => {
            const endTime = performance.now();
            const loadTime = endTime - startTime;
            console.log(`Page load time: ${loadTime.toFixed(2)} milliseconds`);
        });
    </script>
</head>
<!-- Rest of the HTML remains the same -->
<body>
    <!-- Fixed header with site title -->
    <h1>Welcome to Mental Health Support <br>and Awareness Website</h1>
    <!-- Spacing for fixed header -->
    <br><br><br><br><br><br><br>

    <!-- Mobile menu toggle button (hidden by default) -->
    <button onclick="toggleMenu()">Menu ☰</button>
    
    <!-- Navigation bar -->
    <nav id="navbar">
        <a href="index.php">Home</a> |
        <a href="AboutUs.php">About Us</a> |
        <a href="SupportForums.php">Support Forums</a> |
        <a href="Contact us.php">Contact Us</a> |
        <a href="Tools.php">Tools</a>
    </nav>

    <!-- Search form section -->
    <div class="search-form">
        <form action="search.php" method="GET">
            <input type="text" name="query" placeholder="Search..." required>
            <button type="submit">Search</button>
        </form>
    </div>

    <!-- Main content section with images -->
    <section>
        <p>You Are Not Alone</p>
        <img src="Mental1.svg" alt="Mental health support image 1">
        <img src="Mental2.svg" alt="Mental health support image 2">
    </section>

    <!-- Login/Signup section - shows different content based on login status -->
    <section>
        <?php if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true): ?>
            <button onclick="location.href='Login.php'">Login</button>
            <button onclick="location.href='SignUp.php'">Signup</button>
        <?php else: ?>
            <p>Welcome, <?php echo htmlspecialchars($username); ?></p>
            <button onclick="location.href='Logout.php'">Logout</button>
        <?php endif; ?>
    </section>

    <!-- Footer section with links and copyright -->
    <footer>
        <p>Your Safe Space for Mental Health Awareness and Support</p>
        <a href="#">Find a therapist</a>
        <p>Follow us on:</p>
        <a href="www.twitter.com">Twitter</a> |
        <a href="www.facebook.com">Facebook</a> |
        <a href="www.instagram.com">Instagram</a>
        <p>© 2025 Mental Health Support. All rights reserved.</p>
    </footer>

    <script>
        // Function to handle sticky navbar behavior
        window.onscroll = function() {stickyNavbar()};
        
        var navbar = document.getElementById("navbar");
        var heading = document.querySelector("h1");
        var sticky = heading.offsetHeight;
        
        function stickyNavbar() {
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

        function toggleMenu() {
            var navbar = document.getElementById("navbar");
            if(navbar.style.display === "none" || navbar.style.display === "") {
                navbar.style.display = "block";
            } else {
                navbar.style.display = "none";
            }
        }

        function checkScreenSize() {
            if(window.innerWidth <= 768) {
                document.querySelector("button").style.display = "block";
                document.querySelector("#navbar").style.display = "none";
            }
            if(window.innerWidth <= 480) {
                var buttons = document.querySelectorAll("button");
                buttons.forEach(function(button) {
                    button.style.width = "80%";
                    button.style.margin = "10px auto";
                });
            }
        }

        window.addEventListener('resize', checkScreenSize);
        checkScreenSize();
    </script>
</body>
</html>

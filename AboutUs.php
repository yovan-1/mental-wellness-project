<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic meta tags for character encoding, compatibility, and responsive viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Mental Health Support and Awareness</title>
    <style>
        /* Reset default browser styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Main body styling with background image and text settings */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            background-image: url(background1.svg);
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: darken;
            background-attachment: fixed;
            line-height: 1.6;
            color: #333;
        }

        /* Fixed header styling */
        .header {
            color: #2E7D32;
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgba(255, 160, 122, 0.95);
            z-index: 1000;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* Header text styling */
        .header h1 {
            font-size: 2.2em;
            margin: 0;
        }

        /* Responsive header text for mobile devices */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.8em;
            }
        }

        /* Mobile navigation toggle button (hidden by default) */
        .nav-toggle {
            display: none;
            background-color: #2E7D32;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px auto;
        }

        /* Main navigation bar styling */
        nav {
            margin: 20px 0;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* Navigation links styling */
        nav a {
            text-decoration: none;
            color: #1976D2;
            margin: 0 15px;
            font-weight: 600;
            transition: color 0.3s;
            display: inline-block;
        }

        /* Mobile responsive navigation styles */
        @media (max-width: 600px) {
            .nav-toggle {
                display: block;
            }

            nav {
                display: none;
                flex-direction: column;
                gap: 10px;
            }

            nav.active {
                display: flex;
            }

            nav a {
                margin: 5px 0;
            }
        }

        /* Main content section styling */
        .main-section {
            padding: 30px;
            text-align: center;
            margin: 20px auto;
            max-width: 1200px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Grid layout for mission cards */
        .mission-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
            padding: 0 15px;
        }

        /* Individual mission card styling */
        .mission-card {
            background-color: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        /* Grid layout for images section */
        .images-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 15px;
        }

        /* Individual image card styling */
        .image-card {
            border: none;
            padding: 15px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            aspect-ratio: 4/3;
        }

        /* Image styling within cards */
        .image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        /* Goals section styling */
        .goals-section {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            margin: 30px 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        /* Goals list styling */
        .goals-list {
            list-style: none;
            padding: 0;
            text-align: left;
        }

        /* Individual goal item styling */
        .goals-list li {
            margin-bottom: 15px;
            padding-left: 25px;
            position: relative;
        }

        /* About text section styling */
        .about-text {
            text-align: justify;
            margin: 20px;
            font-size: 17px;
            color: #444;
            line-height: 1.8;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        /* Footer styling */
        footer {
            padding: 30px;
            text-align: center;
            margin-top: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px 10px 0 0;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
        }

        /* Mobile responsive adjustments */
        @media (max-width: 480px) {
            .main-section {
                padding: 15px;
            }

            .about-text {
                margin: 10px;
                padding: 15px;
                font-size: 16px;
            }

            footer {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Fixed header section with site title -->
    <header class="header">
        <h1>Welcome to Mental Health Support <br>and Awareness Website</h1>
    </header>
    <!-- Spacing to prevent content from being hidden under fixed header -->
    <br><br><br><br><br><br><br>

    <!-- Mobile navigation toggle button -->
    <button class="nav-toggle" onclick="toggleNav()">Menu ☰</button>

    <!-- Main navigation menu -->
    <nav id="mainNav">
        <a href="Mental22.php">Home</a> |
        <a href="AboutUs.php">About Us</a> |
        <a href="SupportForums.php">Support Forums</a> |
        <a href="Contact us.php">Contact Us</a> |
        <a href="Tools.php">Tools</a>
    </nav>

    <!-- Main content section -->
    <section class="main-section">
        <!-- Main heading -->
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 30px; color: #2E7D32; text-transform: uppercase;">Our Mission & Goals</h2>
        
        <!-- Mission cards section with three key areas -->
        <div class="mission-cards">
            <!-- Support & Empowerment card -->
            <div class="mission-card">
                <i class="fas fa-heart" style="font-size: 40px; color: #2E7D32; margin-bottom: 15px;"></i>
                <h3 style="color: #2E7D32; margin-bottom: 15px;">Support & Empowerment</h3>
                <p style="color: #555;">Providing a safe space for individuals to share, learn, and grow while supporting their mental health journey.</p>
            </div>

            <!-- Education & Awareness card -->
            <div class="mission-card">
                <i class="fas fa-brain" style="font-size: 40px; color: #2E7D32; margin-bottom: 15px;"></i>
                <h3 style="color: #2E7D32; margin-bottom: 15px;">Education & Awareness</h3>
                <p style="color: #555;">Breaking stigmas through education and promoting understanding of mental health conditions.</p>
            </div>

            <!-- Community Building card -->
            <div class="mission-card">
                <i class="fas fa-users" style="font-size: 40px; color: #2E7D32; margin-bottom: 15px;"></i>
                <h3 style="color: #2E7D32; margin-bottom: 15px;">Community Building</h3>
                <p style="color: #555;">Creating a supportive network where everyone feels welcomed, understood, and valued.</p>
            </div>
        </div>

        <!-- Image gallery section -->
        <div class="images-section">
            <div class="image-card">
                <img src="About.svg" alt="Support Group">
            </div>
            <div class="image-card">
                <img src="About2.svg" alt="Counseling Session">
            </div>
            <div class="image-card">
                <img src="About1.svg" alt="Community Event">
            </div>
        </div>

        <!-- Goals and objectives section -->
        <div class="goals-section">
            <h3 style="color: #2E7D32; margin-bottom: 20px;">Our Key Objectives</h3>
            <ul class="goals-list">
                <li><span style="color: #2E7D32; position: absolute; left: 0;">✓</span>Provide accessible mental health resources and support</li>
                <li><span style="color: #2E7D32; position: absolute; left: 0;">✓</span>Create awareness about mental health conditions and treatment options</li>
                <li><span style="color: #2E7D32; position: absolute; left: 0;">✓</span>Foster a supportive community through forums and group activities</li>
                <li><span style="color: #2E7D32; position: absolute; left: 0;">✓</span>Connect individuals with mental health professionals and resources</li>
                <li><span style="color: #2E7D32; position: absolute; left: 0;">✓</span>Promote self-care and mental wellness practices</li>
            </ul>
        </div>

        <!-- About us text section -->
        <div class="about-text">
            Welcome to Mental Health Support and Awareness Website, where we believe in creating a world where mental health is understood, supported, and prioritized. Our dedicated team works tirelessly to provide resources, share experiences, and build a community that promotes mental wellness for all.<br><br>
            We understand that mental health journeys are unique and personal. That's why we offer diverse resources, expert guidance, and peer support to help you navigate your path to wellness. Whether you're seeking information, support, or connection, we're here to help.<br><br>
            Join us in our mission to break stigmas, promote understanding, and create positive change in mental health awareness. Together, we can build a more compassionate and supportive world for everyone affected by mental health challenges.
        </div>
    </section>

    <!-- Footer section with social links and copyright -->
    <footer>
        <p style="font-size: 20px; color: #2E7D32; font-weight: 600;">Your Safe Space for Mental Health Awareness and Support</p>
        <a href="#" style="text-decoration: none; color: #1976D2; font-weight: 600; transition: color 0.3s;">Find a therapist</a>
        <p style="margin-top: 20px; font-weight: 600;">Follow us on:</p>
        <a href="www.twitter.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Twitter</a> |
        <a href="www.facebook.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Facebook</a> |
        <a href="www.Instagram.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Instagram</a>
        <p style="color: #666;">© 2024 Mental Health Support. All rights reserved.</p>
    </footer>

    <!-- JavaScript for mobile navigation toggle -->
    <script>
        function toggleNav() {
            const nav = document.getElementById('mainNav');
            nav.classList.toggle('active');
        }
    </script>
</body>
</html>

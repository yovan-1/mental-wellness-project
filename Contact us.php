<!DOCTYPE html>
<html lang="en">
<!-- Basic HTML5 document setup with English language -->
<head>
    <!-- Character encoding and compatibility settings -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsive viewport settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>Contact Us - Mental Health Support</title>
    <!-- Font Awesome icons library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Mobile responsive styles */
        @media screen and (max-width: 768px) {
            /* Hide navigation links by default on mobile */
            .nav-links {
                display: none;
                flex-direction: column;
                width: 100%;
                text-align: center;
                padding: 10px 0;
            }
            
            /* Show navigation when active class is applied */
            .nav-links.active {
                display: flex;
            }

            /* Style individual nav links for mobile */
            .nav-links a {
                display: block;
                padding: 10px 0;
                margin: 5px 0;
            }

            /* Hide separator spans in mobile view */
            .nav-links span {
                display: none;
            }

            /* Show hamburger menu button on mobile */
            .menu-button {
                display: block !important;
            }

            /* Stack contact cards vertically on mobile */
            .contact-cards {
                flex-direction: column !important;
            }

            /* Stack form rows vertically on mobile */
            .form-row {
                flex-direction: column !important;
                gap: 20px !important;
            }

            /* Allow social icons to wrap on mobile */
            .social-icons {
                flex-wrap: wrap;
            }
        }

        /* Hover animation for social media icons */
        .social-icons a:hover {
            transform: translateY(-5px);
        }

        /* 3D flip animation for contact cards on hover */
        .contact-card:hover {
            transform: rotateY(360deg);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        /* Contact card transition settings */
        .contact-card {
            transition: transform 1.5s ease-in-out !important;
            transform-style: preserve-3d;
        }

        /* Submit button hover effects */
        .submit-btn:hover {
            background-color: #1b5e20 !important;
            transform: scale(1.05);
        }

        /* Form input focus effects */
        .form-input:focus {
            border-color: #2E7D32 !important;
            box-shadow: 0 0 5px rgba(46, 125, 50, 0.3);
        }
    </style>
</head>
<!-- Main body with background image and styling -->
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; text-align: center; background-image: url(background1.svg); background-repeat: no-repeat; background-size: cover; background-blend-mode: darken; background-attachment: fixed; line-height: 1.6; color: #333;">

    <!-- Fixed header section with site title -->
    <h1 style="color: #2E7D32; position: fixed; top: 0; margin-top: 0; width: 100%; background-color: rgba(255, 160, 122, 0.95); z-index: 1000; padding: 15px 0; box-shadow: 0 2px 5px rgba(0,0,0,0.1); font-size: 2.2em;">Welcome to Mental Health Support <br>and Awareness Website</h1>
    <!-- Spacing to prevent content from hiding under fixed header -->
    <br><br><br><br><br><br><br>

    <!-- Navigation bar with responsive menu -->
    <nav style="margin: 20px 0; background-color: rgba(255, 255, 255, 0.9); padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <!-- Mobile menu toggle button -->
        <button onclick="toggleNav()" class="menu-button" style="display: none; background-color: #2E7D32; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 10px auto;">
            <i class="fas fa-bars"></i> Menu
        </button>
        <!-- Navigation links -->
        <div class="nav-links">
            <a href="Mental22.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Home</a> <span>|</span>
            <a href="AboutUs.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">About Us</a> <span>|</span>
            <a href="SupportForums.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Support Forums</a> <span>|</span>
            <a href="Contact us.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Contact Us</a> <span>|</span>
            <a href="Tools.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Tools</a>
        </div>
    </nav>

    <!-- Main content section -->
    <section style="padding: 30px; text-align: center; margin: 20px auto; max-width: 1200px; background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 30px; color: #2E7D32;">Get in Touch</h2>

        <!-- Contact information cards with icons -->
        <div class="contact-cards" style="display: flex; justify-content: space-between; margin-bottom: 40px; gap: 20px;">
            <!-- Phone contact card -->
            <div class="contact-card" style="flex: 1; background-color: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                <i class="fas fa-phone" style="font-size: 2.5em; color: #2E7D32; margin-bottom: 15px;"></i>
                <h3 style="color: #2E7D32; margin-bottom: 10px;">Phone</h3>
                <p>+256 740 661207</p>
                <p>Available 24/7</p>
            </div>
            <!-- Email contact card -->
            <div class="contact-card" style="flex: 1; background-color: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                <i class="fas fa-envelope" style="font-size: 2.5em; color: #2E7D32; margin-bottom: 15px;"></i>
                <h3 style="color: #2E7D32; margin-bottom: 10px;">Email</h3>
                <p>support@mentalhealth.org</p>
                <p>Response within 24 hours</p>
            </div>
            <!-- Location contact card -->
            <div class="contact-card" style="flex: 1; background-color: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                <i class="fas fa-location-dot" style="font-size: 2.5em; color: #2E7D32; margin-bottom: 15px;"></i>
                <h3 style="color: #2E7D32; margin-bottom: 10px;">Location</h3>
                <p>Kihumuro Street</p>
                <p>Mbarara City, Mbarara</p>
            </div>
        </div>

        <!-- Contact form section -->
        <form action="submit_form.php" method="POST" style="max-width: 600px; margin: 0 auto; background-color: white; padding: 30px; border-radius: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <h3 style="color: #2E7D32; margin-bottom: 20px;">Send Us a Message</h3>
            
            <!-- Name and email input row -->
            <div class="form-row" style="display: flex; gap: 40px; margin-bottom: 20px;">
                <div style="flex: 1;">
                    <input type="text" name="name" placeholder="Enter your full name (e.g., Gift Sabiiti)" required class="form-input" style="width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 8px; margin-bottom: 15px; transition: all 0.3s ease;">
                </div>
                <div style="flex: 1;">
                    <input type="email" name="email" placeholder="Enter your email address (e.g., Gift@example.com)" required class="form-input" style="width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 8px; margin-bottom: 15px; transition: all 0.3s ease;">
                </div>
            </div>

            <!-- Subject input field -->
            <div style="margin-bottom: 20px;">
                <input type="text" name="subject" placeholder="What is your message about? (e.g., Counseling Inquiry, Support Request)" required class="form-input" style="width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 8px; transition: all 0.3s ease;">
            </div>

            <!-- Message textarea -->
            <div style="margin-bottom: 20px;">
                <textarea name="message" placeholder="Please share your thoughts, concerns, or questions with us. We're here to help and support you." required class="form-input" style="width: 100%; height: 150px; padding: 12px; border: 2px solid #ddd; border-radius: 8px; resize: vertical; transition: all 0.3s ease;"></textarea>
            </div>

            <!-- Submit button -->
            <button type="submit" class="submit-btn" style="background-color: #2E7D32; color: white; border: none; padding: 15px 30px; border-radius: 25px; font-size: 16px; cursor: pointer; transition: all 0.3s ease;">Send Message</button>
        </form>

        <!-- Social media links section -->
        <div style="margin-top: 40px;">
            <h3 style="color: #2E7D32; margin-bottom: 20px;">Connect With Us</h3>
            <div class="social-icons" style="display: flex; justify-content: center; gap: 20px;">
                <a href="#" style="color: #1877f2; font-size: 2em; text-decoration: none; transition: all 0.3s ease;"><i class="fab fa-facebook"></i></a>
                <a href="#" style="color: #1da1f2; font-size: 2em; text-decoration: none; transition: all 0.3s ease;"><i class="fab fa-twitter"></i></a>
                <a href="#" style="color: #c32aa3; font-size: 2em; text-decoration: none; transition: all 0.3s ease;"><i class="fab fa-instagram"></i></a>
                <a href="#" style="color: #0a66c2; font-size: 2em; text-decoration: none; transition: all 0.3s ease;"><i class="fab fa-linkedin"></i></a>
                <a href="#" style="color: #ff0000; font-size: 2em; text-decoration: none; transition: all 0.3s ease;"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer section -->
    <footer style="background-color: rgba(255, 255, 255, 0.9); padding: 40px; text-align: center; margin-top: 40px; border-radius: 15px 15px 0 0; box-shadow: 0 -2px 10px rgba(0,0,0,0.1);">
            <!-- Footer content -->
            <p style="font-size: 20px; color: #2E7D32; font-weight: 600;">Your Safe Space for Mental Health Awareness and Support</p>
            <a href="#" style="text-decoration: none; color: #1976D2; font-weight: 600; transition: color 0.3s;">Find a therapist</a>
            <p style="margin-top: 20px; font-weight: 600;">Follow us on:</p>
            <a href="www.twitter.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Twitter</a> |
            <a href="www.facebook.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Facebook</a> |
            <a href="www.Instagram.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Instagram</a>
            <p style="color: #666;">© 2024 Mental Health Support. All rights reserved.</p>
    </footer>

    <!-- JavaScript for mobile menu toggle -->
    <script>
        function toggleNav() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }
    </script>

</body>
</html>

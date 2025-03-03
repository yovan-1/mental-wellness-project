<!DOCTYPE html>
<!-- Basic HTML5 document declaration with English language setting -->
<html lang="en">
<head>
    <!-- Essential meta tags for proper character encoding and responsive viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title that appears in browser tab -->
    <title>Tools - Mental Health Support</title>
</head>
<!-- Main body with custom styling:
     - Segoe UI font family with fallbacks
     - Reset margins and padding
     - Centered text alignment
     - Background image with cover sizing and fixed attachment
     - Dark blend mode for better text contrast
     - Standard line height and text color -->
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; text-align: center; background-image: url(background1.svg); background-repeat: no-repeat; background-size: cover; background-blend-mode: darken; background-attachment: fixed; line-height: 1.6; color: #333;">

    <!-- Fixed header section that stays at top of viewport
         - Green text color (#2E7D32)
         - Fixed positioning with z-index to stay above other content
         - Semi-transparent salmon background
         - Subtle box shadow for depth
         - Large font size for prominence -->
    <h1 style="color: #2E7D32; position: fixed; top: 0; margin-top: 0; width: 100%; background-color: rgba(255, 160, 122, 0.95); z-index: 1000; padding: 15px 0; box-shadow: 0 2px 5px rgba(0,0,0,0.1); font-size: 2.2em;">Welcome to Mental Health Support <br>and Awareness Website</h1>
    <!-- Multiple line breaks to create space below fixed header -->
    <br><br><br><br><br><br><br>

    <!-- Navigation bar with links to main site sections
         - Semi-transparent white background
         - Rounded corners and subtle shadow
         - Links styled with blue color, bold weight
         - Separator pipes between links
         - Hover transition effect on links -->
    <nav style="margin: 20px 0; background-color: rgba(255, 255, 255, 0.9); padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <a href="Mental22.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Home</a> |
        <a href="AboutUs.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">About Us</a> |
        <a href="SupportForums.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Support Forums</a> |
        <a href="Contact us.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Contact Us</a> |
        <a href="Tools.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Tools</a>
    </nav>

   
    <!-- Main content section containing tools and resources
         - Centered with max-width for readability
         - Semi-transparent white background
         - Rounded corners and shadow for depth -->
    <section style="padding: 30px; text-align: center; margin: 20px auto; max-width: 1200px; background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 30px; color: #2E7D32;">Mental Health Resources & Tools</h2>
        
        <!-- Grid of tool cards using flexbox
             - Wraps cards on smaller screens
             - Gap between cards for spacing
             - Each card has consistent width and styling -->
        <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; margin: 40px 0;">
            <!-- Mental Health Assessment Card -->
            <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 300px; transition: transform 0.3s;">
                <!-- Image container with fixed height and rounded corners -->
                <div style="height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 20px;">
                    <img src="sssss.svg" alt="Mental Health Assessment" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <h3 style="font-size: 24px; color: #2E7D32; margin-bottom: 15px;">Mental Health Assessment</h3>
                <p style="font-size: 16px; line-height: 1.6; color: #555;">Take our comprehensive assessment to understand your mental well-being better. Get personalized insights and recommendations.</p>
                <!-- Styled button with hover effect -->
                <button onclick="window.location.href='MentalHealthAssessment.php'" style="margin-top: 20px; padding: 12px 25px; background-color: #2E7D32; color: white; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">Start Assessment</button>
            </div>

            <!-- Meditation & Mindfulness Card - Similar structure to above -->
            <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 300px; transition: transform 0.3s;">
                <div style="height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 20px;">
                    <img src="pppppppppp.svg" alt="Guided Meditation" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <h3 style="font-size: 24px; color: #2E7D32; margin-bottom: 15px;">Meditation & Mindfulness</h3>
                <p style="font-size: 16px; line-height: 1.6; color: #555;">Access guided meditations, breathing exercises, and mindfulness practices for stress relief and emotional balance.</p>
                <button onclick="window.location.href='MeditationMindfulness.php'" style="margin-top: 20px; padding: 12px 25px; background-color: #2E7D32; color: white; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">Start Practice</button>
            </div>

            <!-- Mood Tracker Card -->
            <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 300px; transition: transform 0.3s;">
                <div style="height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 20px;">
                    <img src="About.svg" alt="Mood Tracker" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <h3 style="font-size: 24px; color: #2E7D32; margin-bottom: 15px;">Mood Tracker</h3>
                <p style="font-size: 16px; line-height: 1.6; color: #555;">Monitor your daily mood patterns, identify triggers, and track your emotional well-being journey.</p>
                <button onclick="window.location.href='ProgressTracking.php'" style="margin-top: 20px; padding: 12px 25px; background-color: #2E7D32; color: white; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">Track Mood</button>
            </div>

            <!-- Goal Setting Card -->
            <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 300px; transition: transform 0.3s;">
                <div style="height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 20px;">
                    <img src="journal.svg" alt="Journaling Tool" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <h3 style="font-size: 24px; color: #2E7D32; margin-bottom: 15px;">Goal Setting</h3>
                <p style="font-size: 16px; line-height: 1.6; color: #555;">Set and track personal mental health goals, create action plans, and celebrate your progress.</p>
                <button onclick="window.location.href='Goalsetting.php'" style="margin-top: 20px; padding: 12px 25px; background-color: #2E7D32; color: white; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">Set Goals</button>
            </div>

            <!-- Support Groups Card -->
            <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 300px; transition: transform 0.3s;">
                <div style="height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 20px;">
                    <img src="support.svg" alt="Support Groups" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <h3 style="font-size: 24px; color: #2E7D32; margin-bottom: 15px;">Support Groups</h3>
                <p style="font-size: 16px; line-height: 1.6; color: #555;">Join virtual support groups and connect with others who share similar experiences and challenges.</p>
                <button onclick="window.location.href='SupportGroups.php'" style="margin-top: 20px; padding: 12px 25px; background-color: #2E7D32; color: white; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">Join Groups</button>
            </div>

            <!-- Educational Resources Card -->
            <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 300px; transition: transform 0.3s;">
                <div style="height: 200px; overflow: hidden; border-radius: 10px; margin-bottom: 20px;">
                    <img src="resources.svg" alt="Educational Resources" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                </div>
                <h3 style="font-size: 24px; color: #2E7D32; margin-bottom: 15px;">Educational Resources</h3>
                <p style="font-size: 16px; line-height: 1.6; color: #555;">Access articles, videos, and workshops about mental health awareness and self-care strategies.</p>
                <button onclick="window.location.href='EducationResources.php'" style="margin-top: 20px; padding: 12px 25px; background-color: #2E7D32; color: white; border: none; border-radius: 25px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">Learn More</button>
            </div>
        </div>
    </section>

    <!-- Footer section with social links and copyright
         - Semi-transparent white background
         - Rounded top corners
         - Shadow effect on top edge
         - Social media links with hover transitions -->
    <footer style="padding: 30px; text-align: center; margin-top: 40px; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px 10px 0 0; box-shadow: 0 -2px 5px rgba(0,0,0,0.1);">
        <p style="font-size: 20px; color: #2E7D32; font-weight: 600;">Your Safe Space for Mental Health Awareness and Support</p>
        <a href="#" style="text-decoration: none; color: #1976D2; font-weight: 600; transition: color 0.3s;">Find a therapist</a>
        <p style="margin-top: 20px; font-weight: 600;">Follow us on:</p>
        <a href="www.twitter.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Twitter</a> |
        <a href="www.facebook.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Facebook</a> |
        <a href="www.instagram.com" style="text-decoration: none; color: #1976D2; margin: 0 15px; transition: color 0.3s;">Instagram</a>
        <p style="color: #666;">© 2024 Mental Health Support. All rights reserved.</p>
    </footer>

</body>
</html>

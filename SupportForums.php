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
    <title>Support Forums - Mental Health Support and Awareness</title>
</head>
<!-- Main body with custom styling for fonts, margins, background image and colors -->
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; text-align: center; background-image: url(background1.svg); background-repeat: no-repeat; background-size: cover; background-blend-mode: darken; background-attachment: fixed; line-height: 1.6; color: #333;">

    <!-- Fixed header section with site title -->
    <!-- Uses fixed positioning and z-index to stay on top -->
    <h1 style="color: #2E7D32; position: fixed; top: 0; margin-top: 0; width: 100%; background-color: rgba(255, 160, 122, 0.95); z-index: 1000; padding: 15px 0; box-shadow: 0 2px 5px rgba(0,0,0,0.1); font-size: 2.2em;">Welcome to Mental Health Support <br>and Awareness Website</h1>
    <!-- Spacing to prevent content from hiding under fixed header -->
    <br><br><br><br><br><br><br>

    <!-- Navigation bar -->
    <!-- Contains links to main site sections with consistent styling -->
    <nav style="margin: 20px 0; background-color: rgba(255, 255, 255, 0.9); padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <a href="Mental22.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Home</a> |
        <a href="AboutUs.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">About Us</a> |
        <a href="SupportForums.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Support Forums</a> |
        <a href="Contact us.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Contact Us</a> |
        <a href="Tools.php" style="text-decoration: none; color: #1976D2; margin: 0 15px; font-weight: 600; transition: color 0.3s;">Tools</a>
    </nav>

    <!-- Main content section with "You Are Not Alone" message -->
    <section style="padding: 30px; text-align: center; margin: 20px auto; max-width: 1200px; background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 30px; color: #2E7D32; text-transform: uppercase;">You Are Not Alone</h2>
        
        <!-- Support images gallery -->
        <!-- Flexbox container with 3 equally sized image containers -->
        <div style="display: flex; justify-content: center; margin-bottom: 30px; gap: 20px;">
            <div style="border: none; padding: 15px; width: 250px; height: 200px; background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s;">
                <img src="Support.svg" alt="Image 1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
            </div>
            <div style="border: none; padding: 15px; width: 250px; height: 200px; background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s;">
                <img src="Suppo.svg" alt="Image 2" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
            </div>
            <div style="border: none; padding: 15px; width: 250px; height: 200px; background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s;">
                <img src="Support1.svg" alt="Image 3" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
            </div>
        </div>

        <!-- Support Videos Section with PHP Session handling -->
        <div style="text-align: center; margin: 40px 0; padding: 20px; background-color: rgba(46, 125, 50, 0.1); border-radius: 15px;">
            <?php
            // Initialize PHP session
            session_start(); // Start the session properly
            // Check if user is logged in by verifying session variable
            if (isset($_SESSION['user_id'])) { // Check if user is logged in
            ?>
                <!-- Content for logged-in users -->
                <div style="margin-bottom: 30px; background-color: white; padding: 20px; border-radius: 10px;">
                    <h3 style="color: #2E7D32; margin-bottom: 15px;">Support Content</h3>
                    <p style="margin-bottom: 20px;">Upload and access support content in our dedicated videos section.</p>
                    <a href="Videos.php" style="display: inline-block; background-color: #2E7D32; color: white; text-decoration: none; padding: 10px 20px; border-radius: 20px;">Go to Videos Section</a>
                </div>
            <?php
            } else {
                // Content for non-logged in users with login prompt
                echo '<div style="font-size: 50px; display: inline-block; margin: 0 20px; animation: pulse 2s infinite;">&#127916;</div>';
                echo '<p style="margin: 15px 0; font-size: 24px; font-weight: bold; color: #2E7D32;">Please login to access support videos and resources</p>';
                echo '<a href="login.php" style="display: inline-block; background-color: #2E7D32; color: white; 
                            text-decoration: none; padding: 10px 20px; border-radius: 20px; margin-top: 15px;">Login</a>';
            }
            ?>
        </div>

        <!-- Testimonials grid section -->
        <!-- Contains 4 testimonial cards in a 2x2 grid -->
        <div style="text-align: center; margin: 40px 0; color: #333;">
            <h3 style="font-size: 28px; font-weight: bold; color: #2E7D32; margin-bottom: 30px;">Stories of Hope and Healing</h3>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; padding: 20px;">
                <!-- Individual testimonial cards with consistent styling -->
                <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: left;">
                    <p style="font-size: 18px; line-height: 1.8; margin-bottom: 15px;">"Before discovering Mental health awareness website, I felt completely lost and overwhelmed by my depression. Today, I am in a much better place, and I owe so much of my progress to the resources and encouragement I found here."</p>
                    <p style="font-weight: bold; color: #1976D2;">- Sarah M.</p>
                </div>
                <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: left;">
                    <p style="font-size: 18px; line-height: 1.8; margin-bottom: 15px;">"The practical tips and coping strategies I found here were life-changing. I learned how to manage my stress effectively and even found a supportive community that understood what I was going through."</p>
                    <p style="font-weight: bold; color: #1976D2;">- John D.</p>
                </div>
                <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: left;">
                    <p style="font-size: 18px; line-height: 1.8; margin-bottom: 15px;">"Mental health and Awareness website became my lifeline. The personal stories shared by others gave me hope and made me realize I wasn't alone."</p>
                    <p style="font-weight: bold; color: #1976D2;">- Emily R.</p>
                </div>
                <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); text-align: left;">
                    <p style="font-size: 18px; line-height: 1.8; margin-bottom: 15px;">"Thanks to this website, I have regained my sense of peace and am better equipped to handle life's challenges."</p>
                    <p style="font-weight: bold; color: #1976D2;">- Michael T.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Forums Main Section -->
    <section style="padding: 30px; text-align: center; margin: 20px auto; max-width: 1200px; background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 30px; color: #2E7D32; text-transform: uppercase;">Support Community Forums</h2>

        <!-- Forum Categories Grid -->
         
        <!-- 3-column grid showing different support categories -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
            <!-- Individual forum category cards -->
            <div style="background-color: white; padding: 20px; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s;">
                <h3 style="color: #2E7D32; margin-bottom: 15px;">Anxiety Support</h3>
                <p style="color: #666; margin-bottom: 10px;">Active Discussions: 156</p>
                <p style="color: #666; margin-bottom: 15px;">Members: 2.3K</p>
                <button onclick="window.location.href='AnxietySupport.php'" style="background-color: #2E7D32; color: white; border: none; padding: 10px 20px; border-radius: 20px; cursor: pointer;">Join Discussion</button>
            </div>
            <div style="background-color: white; padding: 20px; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s;">
                <h3 style="color: #2E7D32; margin-bottom: 15px;">Depression Support</h3>
                <p style="color: #666; margin-bottom: 10px;">Active Discussions: 203</p>
                <p style="color: #666; margin-bottom: 15px;">Members: 3.1K</p>
                <button onclick="window.location.href='DepressionSupport.php'" style="background-color: #2E7D32; color: white; border: none; padding: 10px 20px; border-radius: 20px; cursor: pointer;">Join Discussion</button>
            </div>
            <div style="background-color: white; padding: 20px; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s;">
                <h3 style="color: #2E7D32; margin-bottom: 15px;">PTSD Support</h3>
                <p style="color: #666; margin-bottom: 10px;">Active Discussions: 128</p>
                <p style="color: #666; margin-bottom: 15px;">Members: 1.8K</p>
                <button onclick="window.location.href='PSTDSupport.php'" style="background-color: #2E7D32; color: white; border: none; padding: 10px 20px; border-radius: 20px; cursor: pointer;">Join Discussion</button>
            </div>
        </div>

        <div style="margin: 20px;">
          <h3>Journaling Feedback Survey</h3>
          <p>Help us improve by sharing your experience with journaling.</p>
          <form action="submit_survey.php" method="POST">
         <label for="experience">How has journaling affected your mental health?</label><br>
         <textarea id="experience" name="experience" rows="4" cols="50"></textarea><br>
         <label for="rating">On a scale of 1 to 5, how helpful is journaling?</label><br>
         <input type="number" id="rating" name="rating" min="1" max="5" required><br>
         <button type="submit">Submit Survey</button>
    </form>
        </div>


        <!-- Recent Discussions Section -->
        <!-- Lists recent forum topics with activity information -->
        <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-bottom: 40px;">
            <h3 style="color: #2E7D32; margin-bottom: 20px; text-align: left;">Recent Discussions</h3>
            <div style="text-align: left;">
                <!-- Individual discussion items with borders between -->
                <div style="border-bottom: 1px solid #eee; padding: 15px 0;">
                    <h4 style="color: #1976D2; margin-bottom: 10px;">Coping with Pandemic Anxiety</h4>
                    <p style="color: #666; font-size: 14px;">Started by Jane D. • 45 replies • 2 hours ago</p>
                </div>
                <div style="border-bottom: 1px solid #eee; padding: 15px 0;">
                    <h4 style="color: #1976D2; margin-bottom: 10px;">Meditation Techniques That Work</h4>
                    <p style="color: #666; font-size: 14px;">Started by Mark S. • 32 replies • 5 hours ago</p>
                </div>
                <div style="padding: 15px 0;">
                    <h4 style="color: #1976D2; margin-bottom: 10px;">Finding Peace Through Art Therapy</h4>
                    <p style="color: #666; font-size: 14px;">Started by Lisa M. • 28 replies • 8 hours ago</p>
                </div>
            </div>
        </div>

        <!-- Virtual Support Groups Section -->
        <!-- 2-column grid showing scheduled support group sessions -->
        <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-bottom: 40px;">
            <h3 style="color: #2E7D32; margin-bottom: 20px;">Virtual Support Groups</h3>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                <!-- Individual support group cards -->
                <div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                    <h4 style="color: #1976D2; margin-bottom: 10px;">Weekly Mindfulness Group</h4>
                    <p style="color: #666;">Every Monday at 7 PM EST</p>
                    <button onclick="window.location.href='GeneralSupport.php'" style="background-color: #2E7D32; color: white; border: none; padding: 10px 20px; border-radius: 20px; margin-top: 15px; cursor: pointer;">Register</button>
                </div>
                <div style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                    <h4 style="color: #1976D2; margin-bottom: 10px;">Stress Management Workshop</h4>
                    <p style="color: #666;">Every Wednesday at 6 PM EST</p>
                    <button onclick="window.location.href='StressManagement.php'" style="background-color: #2E7D32; color: white; border: none; padding: 10px 20px; border-radius: 20px; margin-top: 15px; cursor: pointer;">Register</button>
                </div>
            </div>
        </div>

        <!-- Community Guidelines Section -->
        <!-- Important rules and expectations for forum participation -->
        <div style="background-color: rgba(46, 125, 50, 0.1); padding: 25px; border-radius: 15px; margin-bottom: 40px;">
            <h3 style="color: #2E7D32; margin-bottom: 15px;">Community Guidelines</h3>
            <p style="color: #333; line-height: 1.6;">Our forum is a safe space for everyone. Please be respectful, supportive, and mindful of others' experiences. Remember to maintain confidentiality and follow our community guidelines.</p>
        </div>

        
    </section>

    <!-- Expert Therapists Section -->
    <!-- Showcases professional mental health providers -->
    <section style="padding: 40px; text-align: center; margin: 40px auto; max-width: 1200px; background-color: rgba(255, 255, 255, 0.9); border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 30px; color: #2E7D32;">Our Expert Therapists</h2>
        <div style="display: flex; justify-content: center; gap: 30px;">
            <!-- Individual therapist cards with contact information -->
            <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 300px;">
                <h3 style="font-size: 22px; color: #1976D2; margin-bottom: 15px;">Dr. Gillian Mercy</h3>
                <p style="font-size: 16px; color: #666; margin-bottom: 20px;">Specialty: Anxiety & Depression</p>
                <a href="mailto:Giftmartha47@gmail.com" style="display: inline-block; text-decoration: none; color: white; background-color: #2E7D32; padding: 12px 25px; border-radius: 25px; font-weight: 600; transition: transform 0.3s;">Contact Now</a>
            </div>
            <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 300px;">
                <h3 style="font-size: 22px; color: #1976D2; margin-bottom: 15px;">Dr. Gift Martha</h3>
                <p style="font-size: 16px; color: #666; margin-bottom: 20px;">Specialty: Trauma Therapy</p>
                <a href="mailto:Giftmartha47@gmail.com" style="display: inline-block; text-decoration: none; color: white; background-color: #2E7D32; padding: 12px 25px; border-radius: 25px; font-weight: 600; transition: transform 0.3s;">Contact Now</a>
            </div>
            <div style="background-color: white; padding: 25px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 300px;">
                <h3 style="font-size: 22px; color: #1976D2; margin-bottom: 15px;">Dr. Given Noah</h3>
                <p style="font-size: 16px; color: #666; margin-bottom: 20px;">Specialty: Family Counseling</p>
                <a href="mailto:Giftmartha47@gmail.com" style="display: inline-block; text-decoration: none; color: white; background-color: #2E7D32; padding: 12px 25px; border-radius: 25px; font-weight: 600; transition: transform 0.3s;">Contact Now</a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <!-- Contains site tagline, links, and social media connections -->
    <footer style="padding: 40px; text-align: center; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px 10px 0 0; box-shadow: 0 -2px 5px rgba(0,0,0,0.1);">
        <p style="font-size: 24px; color: #2E7D32; font-weight: 600; margin-bottom: 20px;">Your Safe Space for Mental Health Awareness and Support</p>
        <a href="#" style="text-decoration: none; color: #1976D2; font-weight: 600; font-size: 18px;">Find a therapist</a>
        <p style="margin: 20px 0; font-weight: 600; font-size: 18px;">Connect With Us:</p>
        <!-- Social media links -->
        <div style="display: flex; justify-content: center; gap: 30px;">
            <a href="#" style="text-decoration: none; color: #1976D2; font-size: 18px; transition: color 0.3s;">Twitter</a>
            <a href="#" style="text-decoration: none; color: #1976D2; font-size: 18px; transition: color 0.3s;">Facebook</a>
            <a href="#" style="text-decoration: none; color: #1976D2; font-size: 18px; transition: color 0.3s;">Instagram</a>
        </div>
        <p style="color: #666;">© 2024 Mental Health Support. All rights reserved.</p>
    </footer>

</body>
</html>

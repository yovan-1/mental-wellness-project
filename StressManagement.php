<!DOCTYPE html>
<html lang="en">
<!-- Basic HTML5 document setup with English language -->
<head>
    <!-- Character encoding and responsive viewport settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>Stress Management Workshop</title>
</head>
<!-- Main body with background image styling -->
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-image: url(background1.svg); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">

    <!-- Header section with title -->
    <!-- Uses green color (#2E7D32) for text and semi-transparent white background -->
    <h1 style="color: #2E7D32; text-align: center; padding: 20px; background-color: rgba(255, 255, 255, 0.95); margin: 0; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        Stress Management Workshop
    </h1>

    <!-- Main content container with max width and centered layout -->
    <div style="max-width: 1000px; margin: 40px auto; padding: 20px;">
        <!-- Workshop Details Section -->
        <!-- Contains key information about the workshop schedule and facilitator -->
        <section style="background-color: rgba(255, 255, 255, 0.95); padding: 30px; border-radius: 15px; margin-bottom: 30px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <h2 style="color: #2E7D32; margin-bottom: 20px;">Workshop Information</h2>
            <div style="line-height: 1.6;">
                <!-- Workshop details displayed in paragraph elements with bold labels -->
                <p><strong>Time:</strong> Every Wednesday at 6 PM EST</p>
                <p><strong>Duration:</strong> 90 minutes</p>
                <p><strong>Facilitator:</strong> Dr. Gift Martha</p>
                <p><strong>Platform:</strong> Zoom (link will be sent to registered participants)</p>
                <p><strong>Next Session:</strong> Dealing with Work-Related Stress</p>
            </div>
        </section>

        <!-- Registered Participants Section -->
        <!-- Displays a grid of participant cards with their information -->
        <section style="background-color: rgba(255, 255, 255, 0.95); padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <h2 style="color: #2E7D32; margin-bottom: 20px;">Registered Participants</h2>
            <!-- Responsive grid layout that adjusts columns based on screen width -->
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
                <?php
                // Array of participant data (would typically come from a database)
                // Each participant has name, join date, and number of sessions attended
                $participants = [
                    ['name' => 'Sarah Johnson', 'joinDate' => '2024-01-15', 'sessions' => 4],
                    ['name' => 'Michael Chen', 'joinDate' => '2024-01-22', 'sessions' => 3],
                    ['name' => 'Emma Williams', 'joinDate' => '2024-02-01', 'sessions' => 2],
                    ['name' => 'David Brown', 'joinDate' => '2024-02-05', 'sessions' => 2],
                    ['name' => 'Lisa Anderson', 'joinDate' => '2024-02-10', 'sessions' => 1],
                    ['name' => 'James Wilson', 'joinDate' => '2024-02-12', 'sessions' => 1],
                    ['name' => 'Maria Garcia', 'joinDate' => '2024-02-15', 'sessions' => 1],
                    ['name' => 'Robert Taylor', 'joinDate' => '2024-02-19', 'sessions' => 1],
                ];

                // Loop through participants array and create a card for each
                foreach ($participants as $participant) {
                    // Each card shows name, join date, and sessions attended
                    echo '<div style="background-color: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                            <h3 style="color: #1976D2; margin: 0 0 10px 0;">' . $participant['name'] . '</h3>
                            <p style="margin: 5px 0; color: #666;">Joined: ' . $participant['joinDate'] . '</p>
                            <p style="margin: 5px 0; color: #666;">Sessions Attended: ' . $participant['sessions'] . '</p>
                          </div>';
                }
                ?>
            </div>
        </section>

        <!-- Workshop Topics Section -->
        <!-- Displays upcoming workshop topics in a vertical grid layout -->
        <section style="background-color: rgba(255, 255, 255, 0.95); padding: 30px; border-radius: 15px; margin-top: 30px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <h2 style="color: #2E7D32; margin-bottom: 20px;">Upcoming Topics</h2>
            <!-- Grid container for topic cards -->
            <div style="display: grid; gap: 15px;">
                <!-- Individual topic cards with title and description -->
                <div style="background-color: white; padding: 15px; border-radius: 10px;">
                    <h3 style="color: #1976D2; margin: 0 0 10px 0;">Week 1: Understanding Stress Triggers</h3>
                    <p style="margin: 0; color: #666;">Identifying personal stress triggers and developing awareness</p>
                </div>
                <div style="background-color: white; padding: 15px; border-radius: 10px;">
                    <h3 style="color: #1976D2; margin: 0 0 10px 0;">Week 2: Mindfulness Techniques</h3>
                    <p style="margin: 0; color: #666;">Practical mindfulness exercises for daily stress management</p>
                </div>
                <div style="background-color: white; padding: 15px; border-radius: 10px;">
                    <h3 style="color: #1976D2; margin: 0 0 10px 0;">Week 3: Work-Life Balance</h3>
                    <p style="margin: 0; color: #666;">Strategies for maintaining healthy boundaries and balance</p>
                </div>
                <div style="background-color: white; padding: 15px; border-radius: 10px;">
                    <h3 style="color: #1976D2; margin: 0 0 10px 0;">Week 4: Building Resilience</h3>
                    <p style="margin: 0; color: #666;">Tools and techniques for developing emotional resilience</p>
                </div>
            </div>
        </section>

        <!-- Registration Button Section -->
        <!-- Centered button with green background and rounded corners -->
        <div style="text-align: center; margin-top: 30px;">
            <a href="#" style="display: inline-block; background-color: #2E7D32; color: white; text-decoration: none; padding: 15px 30px; border-radius: 25px; font-weight: bold; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                Register for Next Session
            </a>
        </div>
    </div>

    <!-- Footer Section -->
    <!-- Contains contact information and copyright notice -->
    <footer style="text-align: center; padding: 20px; background-color: rgba(255, 255, 255, 0.95); margin-top: 40px;">
        <p style="color: #666;">For any questions, please contact Dr. Gift Martha at Giftmartha47@gmail.com</p>
        <p style="color: #666;">© 2025 Mental Health Support. All rights reserved.</p>
    </footer>

</body>
</html>
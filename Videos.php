<?php
// Start a PHP session to maintain user state across pages
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic meta tags for character encoding and responsive viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Video Library</title>
</head>
<!-- Main body with gradient background and custom font styling -->
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background: linear-gradient(135deg, #2E7D32, #1976D2); min-height: 100vh;">
    <!-- Header section with title and description -->
    <header style="text-align: center; padding: 40px 20px; background-color: rgba(255, 255, 255, 0.95); box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <h1 style="color: #2E7D32; font-size: 2.5em; margin: 0;">Wellness Video Library</h1>
        <p style="color: #666; font-size: 1.2em; margin-top: 10px;">Discover healing through our curated collection of mental wellness videos</p>
    </header>

    <!-- Main content container with flexbox layout -->
    <div style="max-width: 1200px; margin: 40px auto; padding: 0 20px; display: flex; gap: 30px; flex-wrap: wrap;">
        <!-- Video Player Section - Takes up 2/3 of container width -->
        <div id="video-player" style="flex: 2; min-width: 300px; background: rgba(255, 255, 255, 0.95); padding: 20px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            <!-- Download instructions banner -->
            <div style="margin-bottom: 15px; padding: 10px; background: #f0f7f0; border-radius: 8px; text-align: center;">
                <p style="color: #2E7D32; margin: 0;"><strong>How to Download:</strong> Click the three dots (⋮) in the video player controls and select "Download"</p>
            </div>
            <!-- HTML5 video player with download controls enabled -->
            <video id="player" style="width: 100%; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);" controls controlsList="download">
                <source id="video-source" src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
            <!-- Upload form section -->
            <div style="margin-top: 20px; padding: 15px; background: #f5f5f5; border-radius: 10px;">
                <h3 style="color: #2E7D32; margin-bottom: 15px;">Upload Support Content</h3>
                <!-- File upload form that posts to upload_file.php -->
                <form action="upload_file.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="supportFile" accept="video/*" style="margin-bottom: 10px;">
                    <button type="submit" style="background: #2E7D32; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Upload Video</button>
                </form>
            </div>
        </div>

        <!-- Video List Section - Takes up 1/3 of container width -->
        <div id="video-list" style="flex: 1; min-width: 250px; background: rgba(255, 255, 255, 0.95); padding: 20px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            <h2 style="color: #2E7D32; margin-bottom: 20px; text-align: center;">Available Videos</h2>
            
            <?php
            // Define directory path where videos are stored
            $uploadDir = 'My assignments 2/';
            
            // Array of predefined video files that should always be available
            $predefinedVideos = array('Video_1.mp4', 'Video_2.mp3', 'Video_3.mp3');
            
            // Get all video files (mp4 and mp3) from the upload directory
            $videos = glob($uploadDir . "*.{mp4,MP4,mp3,MP3}", GLOB_BRACE);
            
            // Add predefined videos to the list if they don't already exist
            foreach ($predefinedVideos as $video) {
                $videoPath = $uploadDir . $video;
                if (!in_array($videoPath, $videos)) {
                    $videos[] = $videoPath;
                }
            }
            
            // Loop through and display each video in the list
            foreach ($videos as $video) {
                $fileName = basename($video);
                ?>
                <!-- Individual video item with play and delete controls -->
                <div class="video-item" style="margin-bottom: 15px; padding: 15px; background: #f5f5f5; border-radius: 10px;">
                    <h3 style="margin: 0; color: #1976D2;"><?php echo htmlspecialchars($fileName); ?></h3>
                    <div style="display: flex; gap: 10px; margin-top: 10px;">
                        <button onclick="loadVideo('<?php echo htmlspecialchars($fileName); ?>')" style="background: #1976D2; color: white; border: none; padding: 8px 15px; border-radius: 5px; cursor: pointer;">Play</button>
                        <button onclick="deleteVideo('<?php echo htmlspecialchars($fileName); ?>')" style="background: #dc3545; color: white; border: none; padding: 8px 15px; border-radius: 5px; cursor: pointer;">Delete</button>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <!-- JavaScript functions for video player control -->
    <script>
        // Function to load and play a video in the player
        function loadVideo(videoFile) {
            // Set the video source URL
            document.getElementById("video-source").src = "/My assignments 2/" + videoFile;
            // Reload the video player with new source
            document.getElementById("player").load();
            // Start playing the video
            document.getElementById("player").play();
        }

        // Function to handle video deletion
        function deleteVideo(videoFile) {
            // Confirm deletion with user
            if (confirm('Are you sure you want to delete this video?')) {
                // Send DELETE request to server
                fetch('delete_video.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        filename: videoFile
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // If deletion successful, remove video item from DOM
                        const videoItems = document.querySelectorAll('.video-item');
                        videoItems.forEach(item => {
                            if (item.querySelector('h3').textContent === videoFile) {
                                item.remove();
                            }
                        });
                        alert('Video deleted successfully');
                    } else {
                        alert('Error deleting video: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error deleting video');
                });
            }
        }
    </script>
</body>
</html>

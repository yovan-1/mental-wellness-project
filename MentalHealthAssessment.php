<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Assessment</title>
    
    <script>
        // METROLOGY CONCEPT: Tracking User Engagement (Time Spent on Page)
        let startTime = Date.now(); // Capture the time when the user lands on the page

        // When the user leaves the page, calculate the time spent
        window.addEventListener("beforeunload", function () {
            let timeSpent = Math.round((Date.now() - startTime) / 1000); // Convert to seconds
            console.log("User spent " + timeSpent + " seconds on the page.");
            sendEngagementData(timeSpent); // Send data to the server for analysis
        });

        // Function to send engagement data to the backend
        function sendEngagementData(timeSpent) {
            fetch("log_engagement.php", { // METROLOGY: Sending engagement data to be logged
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ timeSpent: timeSpent }) // Store engagement time in a database
            }).catch(error => console.log("Error logging data:", error));
        }

        // METROLOGY CONCEPT: Measuring Response Time of Form Submission
        document.querySelector("form").addEventListener("submit", function(event) {
            let formStartTime = Date.now(); // Capture start time of form submission
            fetch("process_assessment.php", { method: "POST" }) // Send data to the backend
                .then(response => response.text())
                .then(data => {
                    let responseTime = (Date.now() - formStartTime) / 1000; // Calculate time taken for response
                    document.getElementById("response-time").innerText = 
                        "Response time: " + responseTime + " seconds"; // Display system performance metric
                    console.log("Response Time:", responseTime);
                })
                .catch(error => console.log("Error:", error));
        });
    </script>
</head>
<body>
    <h1>Mental Health Assessment</h1>
    <p>Take our comprehensive assessment to understand your mental well-being better.</p>

    <form action="process_assessment.php" method="POST">
        <label>How often do you feel stressed?</label><br>
        <select name="stress_level">
            <option value="1">Rarely</option>
            <option value="2">Sometimes</option>
            <option value="3">Often</option>
            <option value="4">Always</option>
        </select>
        <br><br>

        <label>How well do you sleep?</label><br>
        <select name="sleep_quality">
            <option value="1">Very well</option>
            <option value="2">Moderate</option>
            <option value="3">Poor</option>
        </select>
        <br><br>

        <label>How often do you engage in relaxing activities?</label><br>
        <select name="relaxation">
            <option value="1">Daily</option>
            <option value="2">A few times a week</option>
            <option value="3">Rarely</option>
            <option value="4">Never</option>
        </select>
        <br><br>

        <input type="submit" value="Submit Assessment">
    </form>

    <p id="response-time"></p>
</body>
</html>

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
    <link rel="stylesheet" href="styles.css"> <!-- External CSS for styling -->
    <script defer src="assessment.js"></script> <!-- External JavaScript for logic -->
</head>
<body>
    <div class="container">
        <h1>Mental Health Assessment</h1>
        <p>Answer the following questions honestly to assess your mental well-being.</p>
        
        <form id="assessmentForm" action="process_assessment.php" method="POST">
            <label>1. Do you often feel anxious or worried?</label>
            <select name="q1" required>
                <option value="">Select</option>
                <option value="5">Very Often</option>
                <option value="4">Often</option>
                <option value="3">Sometimes</option>
                <option value="2">Rarely</option>
                <option value="1">Never</option>
            </select>
            
            <label>2. Do you have trouble sleeping or experience frequent nightmares?</label>
            <select name="q2" required>
                <option value="">Select</option>
                <option value="5">Very Often</option>
                <option value="4">Often</option>
                <option value="3">Sometimes</option>
                <option value="2">Rarely</option>
                <option value="1">Never</option>
            </select>

            <label>3. Do you feel overwhelmed with daily tasks?</label>
            <select name="q3" required>
                <option value="">Select</option>
                <option value="5">Very Often</option>
                <option value="4">Often</option>
                <option value="3">Sometimes</option>
                <option value="2">Rarely</option>
                <option value="1">Never</option>
            </select>

            <button type="button" onclick="calculateScore()">Calculate Score</button>
            <p id="resultMessage"></p>
            <input type="hidden" name="score" id="finalScore" value="">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #E2F1E7;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    label, select, button {
        display: block;
        margin-top: 10px;
    }
    button {
        background-color: #387478;
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
    }
    button:hover {
        background-color: #243642;
    }
</style>

<script>
function calculateScore() {
    let q1 = parseInt(document.querySelector('[name="q1"]').value) || 0;
    let q2 = parseInt(document.querySelector('[name="q2"]').value) || 0;
    let q3 = parseInt(document.querySelector('[name="q3"]').value) || 0;
    
    let totalScore = q1 + q2 + q3;
    document.getElementById('finalScore').value = totalScore;
    
    let resultMessage = "";
    if (totalScore >= 12) {
        resultMessage = "You may be experiencing high stress. Consider seeking professional support.";
    } else if (totalScore >= 6) {
        resultMessage = "Your stress levels are moderate. Practicing mindfulness may help.";
    } else {
        resultMessage = "Your stress levels seem low. Keep up the good self-care!";
    }
    document.getElementById('resultMessage').innerText = resultMessage;
}
</script>

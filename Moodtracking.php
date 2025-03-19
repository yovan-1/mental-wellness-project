
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Tracking</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2E7D32;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mood Tracking</h1>
        <p>Welcome, User! Track your mood here:</p>
        
        <form action="save_mood.php" method="POST">
            <div>
                <label for="mood">How are you feeling today?</label><br>
                <select name="mood" id="mood" required>
                    <option value="">Select your mood</option>
                    <option value="happy">Happy 😊</option>
                    <option value="sad">Sad 😢</option>
                    <option value="anxious">Anxious 😰</option>
                    <option value="calm">Calm 😌</option>
                    <option value="angry">Angry 😠</option>
                </select>
            </div>
            <div>
                <label for="notes">Notes (optional):</label><br>
                <textarea name="notes" id="notes" rows="4" cols="50"></textarea>
            </div>
            <button type="submit">Save Mood</button>
        </form>
    </div>
</body>
</html>


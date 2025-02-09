<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "<p>Please <a href='login.php'>log in</a> to set goals.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goal Setting</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2E7D32;
            text-align: center;
            margin-bottom: 30px;
        }
        .goal-form {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .goal-list {
            margin-top: 30px;
        }
        .goal-item {
            background: #fff;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            border-left: 4px solid #2E7D32;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        input[type="text"], textarea, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background: #2E7D32;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #1B5E20;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎯 Goal Setting Journey</h1>
        <p>Welcome, <?php echo $_SESSION['username']; ?>! Your path to mental wellness starts here.</p>
        
        <div class="goal-form">
            <h2>Set a New Goal</h2>
            <form action="save_goal.php" method="POST">
                <div>
                    <label for="goal_title">Goal Title:</label>
                    <input type="text" id="goal_title" name="goal_title" placeholder="Enter your goal title" required>
                </div>
                
                <div>
                    <label for="goal_description">Description:</label>
                    <textarea id="goal_description" name="goal_description" rows="4" placeholder="Describe your goal in detail" required></textarea>
                </div>
                
                <div>
                    <label for="goal_timeline">Timeline:</label>
                    <select id="goal_timeline" name="goal_timeline" required>
                        <option value="1_week">1 Week</option>
                        <option value="1_month">1 Month</option>
                        <option value="3_months">3 Months</option>
                        <option value="6_months">6 Months</option>
                        <option value="1_year">1 Year</option>
                    </select>
                </div>
                
                <button type="submit">Set Goal ✨</button>
            </form>
        </div>

        <div class="goal-list">
            <h2>Your Current Goals</h2>
            <?php
            // Fetch and display existing goals
            include 'db_connection.php';
            $user_id = $_SESSION['user_id'];
            $query = "SELECT * FROM goals WHERE user_id = ? ORDER BY created_at DESC";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            while($goal = $result->fetch_assoc()) {
                echo '<div class="goal-item">';
                echo '<h3>' . htmlspecialchars($goal['title']) . '</h3>';
                echo '<p>' . htmlspecialchars($goal['description']) . '</p>';
                echo '<div class="goal-actions">';
                echo '<button onclick="editGoal(' . $goal['id'] . ')">Edit</button>';
                echo '<button onclick="markComplete(' . $goal['id'] . ')">Mark Complete ✓</button>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <script>
        function editGoal(goalId) {
            // Add edit functionality
            window.location.href = 'edit_goal.php?id=' + goalId;
        }

        function markComplete(goalId) {
            // Add completion functionality
            if(confirm('Are you sure you want to mark this goal as complete?')) {
                window.location.href = 'complete_goal.php?id=' + goalId;
            }
        }
    </script>
</body>
</html>

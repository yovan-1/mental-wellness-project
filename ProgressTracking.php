<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "<p>Please <a href='login.php'>log in</a> to track your progress.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Tracking</title>
</head>
<body>
    <h1>Progress Tracking</h1>
    <h2>your Trogress over Time </h2>
    <canvas id="moodChart" width="400" height="200"></canvas> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script>
      const ctx = document.getElementById('moodChart').getContext('2d'); 
      const moodChart = new Chart(ctx, { 
        type: 'line', 
        data: {
             labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5'],
              datasets: [{ label: 'Mood Score',
                 data: [3, 4, 2, 5, 4], // Example data 
                 borderColor: '#2E7D32', 
                 fill: false
                  }] 
                  }, 
                  options: { 
                    scales: { 
                        y: { 
                            beginAtZero: true,
                             max: 5
                             
                              }
                               }
                                }
                                 });
                                  </script>
    <p>Welcome, <?php echo $_SESSION['username']; ?>! Track your progress here:</p>
    <!-- Progress tracking elements such as charts or tables go here -->
</body>
</html>

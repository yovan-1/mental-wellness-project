<?php
// This array contains all searchable content from the website
// Each item is an associative array with title, description, page URL and relevant keywords
$content = [
    [
        'title' => 'Anxiety Support', // Title of the content
        'description' => 'Join our anxiety support group discussions and find help.', // Brief description
        'page' => 'SupportForums.php#anxiety', // URL/anchor where content can be found
        'keywords' => ['anxiety', 'stress', 'worry', 'panic', 'fear'] // Related search terms
    ],
    [
        'title' => 'Depression Support',
        'description' => 'Connect with others in our depression support community.',
        'page' => 'SupportForums.php#depression', 
        'keywords' => ['depression', 'sad', 'mood', 'depressed', 'therapy']
    ],
    [
        'title' => 'Contact Therapist',
        'description' => 'Find and connect with our expert therapists.',
        'page' => 'SupportForums.php#therapists',
        'keywords' => ['therapist', 'counselor', 'professional', 'help', 'expert']
    ],
    // Additional content entries can be added here in the same format
];

/**
 * Searches through content array for matches with the search query
 * @param string $query - The search term entered by user
 * @param array $content - Array of content to search through
 * @return array - Array of matching content items
 */
function searchContent($query, $content) {
    $results = []; // Array to store matching results
    $query = strtolower(trim($query)); // Convert query to lowercase and remove whitespace
    
    // Loop through each content item to check for matches
    foreach ($content as $item) {
        // Check if query appears in the title (case-insensitive)
        if (strpos(strtolower($item['title']), $query) !== false) {
            $results[] = $item; // Add to results if match found
            continue; // Move to next item
        }
        
        // Check if query appears in the description (case-insensitive)
        if (strpos(strtolower($item['description']), $query) !== false) {
            $results[] = $item;
            continue;
        }
        
        // Check if query contains any of the keywords
        foreach ($item['keywords'] as $keyword) {
            if (strpos($query, strtolower($keyword)) !== false) {
                $results[] = $item;
                break; // Exit keyword loop once match is found
            }
        }
    }
    
    return $results;
}

// Process search when query parameter exists in URL
if (isset($_GET['query']) && !empty($_GET['query'])) {
    $query = $_GET['query']; // Get search query from URL
    $results = searchContent($query, $content); // Perform search
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results - Mental Health Support</title>
    <!-- CSS styles for search results -->
    <style>
        /* Style for each search result container */
        .search-result {
            background-color: white;
            padding: 20px;
            margin: 10px 0;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        /* Hover effect for search results */
        .search-result:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
    </style>
</head>
<!-- Body with custom font and background styling -->
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 20px; background-color: #f5f5f5;">
    <!-- Main container for search results -->
    <div style="max-width: 800px; margin: 0 auto;">
        <h1>Search Results</h1>
        
        <?php if (isset($results)): ?> <!-- Check if search was performed -->
            <?php if (empty($results)): ?> <!-- Display message if no results found -->
                <div style="text-align: center; padding: 20px;">
                    <p>No results found for "<?php echo htmlspecialchars($query); ?>"</p>
                    <a href="Mental22.php" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; margin-top: 10px;">Return to Home</a>
                </div>
            <?php else: ?> <!-- Display results if found -->
                <p>Found <?php echo count($results); ?> results for "<?php echo htmlspecialchars($query); ?>":</p>
                <?php foreach ($results as $result): ?> <!-- Loop through and display each result -->
                    <div class="search-result">
                        <h3><a href="<?php echo htmlspecialchars($result['page']); ?>" style="color: #2E7D32; text-decoration: none;">
                            <?php echo htmlspecialchars($result['title']); ?>
                        </a></h3>
                        <p><?php echo htmlspecialchars($result['description']); ?></p>
                        <a href="<?php echo htmlspecialchars($result['page']); ?>" style="color: #1976D2; text-decoration: none;">View More →</a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>
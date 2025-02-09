<?php
/**
 * Video Deletion Script
 * This script handles the deletion of video files from the server
 * It expects a JSON request containing the filename to delete
 */

// Initialize the PHP session to maintain user state across requests
// This is important for security and user authentication
session_start();

// Define the directory path where uploaded video files are stored
// The constant path ensures consistency across the script
$uploadDir = 'My assignments 2/';

// Retrieve and parse the JSON data sent in the request body
// file_get_contents('php://input') reads raw POST data
// json_decode converts the JSON string to a PHP array (true parameter)
$data = json_decode(file_get_contents('php://input'), true);

// Verify if a filename was included in the JSON request
if (isset($data['filename'])) {
    // Extract just the filename component using basename()
    // This is a security measure to prevent directory traversal attacks
    // by removing any path components from the filename
    $filename = basename($data['filename']);
    
    // Construct the complete file path by combining directory and filename
    $filePath = $uploadDir . $filename;

    // Verify that the target file actually exists before attempting deletion
    if (file_exists($filePath)) {
        // Try to delete the file using unlink()
        // unlink() returns true if deletion was successful, false otherwise
        if (unlink($filePath)) {
            // If deletion succeeded, return a JSON success response
            // This lets the client know the operation completed successfully
            echo json_encode(['success' => true]);
        } else {
            // If unlink() failed, return a JSON error response with details
            // This could happen due to permission issues or file system errors
            echo json_encode([
                'success' => false, 
                'message' => 'Failed to delete the file.'
            ]);
        }
    } else {
        // If the file doesn't exist, return a JSON error response
        // This prevents attempts to delete non-existent files
        echo json_encode([
            'success' => false, 
            'message' => 'File not found.'
        ]);
    }
} else {
    // If no filename was provided in the request, return a JSON error response
    // This ensures the client provides all required parameters
    echo json_encode([
        'success' => false, 
        'message' => 'No filename provided.'
    ]);
}
?>
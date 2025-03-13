<?php
// Start a new or resume existing session to maintain user state
session_start();

// Check if user is logged in by verifying session variable
// If not logged in, redirect to login page and stop execution
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Check if a file was uploaded via POST request
if (isset($_FILES['supportFile'])) {
    // Handle different upload error scenarios using switch statement
    switch ($_FILES['supportFile']['error']) {
        // Case when file upload is successful
        case UPLOAD_ERR_OK:
            // Set upload directory path
            $uploadDir = 'My assignments 2/';
            
            // Create upload directory if it doesn't exist
            // 0777 grants full read/write/execute permissions
            // true enables recursive directory creation
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            
            // Get original filename and create target path
            $fileName = basename($_FILES['supportFile']['name']);
            $targetPath = $uploadDir . $fileName;

            // Try to move uploaded file from temp location to target directory
            if (move_uploaded_file($_FILES['supportFile']['tmp_name'], $targetPath)) {
                // On success, set session variables and redirect
                $_SESSION['upload_success'] = true;
                $_SESSION['uploaded_file'] = $fileName;
                header('Location: SupportForums.php?upload=success');
                exit();
            } else {
                // If move fails, set error message and redirect
                $_SESSION['upload_error'] = "Failed to move uploaded file.";
                header('Location: SupportForums.php?upload=failed');
                exit();
            }
            break;

        // Cases for file size exceeding limits
        // UPLOAD_ERR_INI_SIZE: Exceeds upload_max_filesize in php.ini
        // UPLOAD_ERR_FORM_SIZE: Exceeds MAX_FILE_SIZE in HTML form
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            $_SESSION['upload_error'] = "File is too large.";
            header('Location: SupportForums.php?upload=failed');
            exit();
            break;

        // Case when file was only partially uploaded
        case UPLOAD_ERR_PARTIAL:
            $_SESSION['upload_error'] = "File was only partially uploaded.";
            header('Location: SupportForums.php?upload=failed');
            exit();
            break;

        // Case when no file was selected for upload
        case UPLOAD_ERR_NO_FILE:
            $_SESSION['upload_error'] = "No file was uploaded.";
            header('Location: SupportForums.php?upload=failed');
            exit();
            break;

        // Default case for any other upload errors
        default:
            $_SESSION['upload_error'] = "Unknown upload error.";
            header('Location: SupportForums.php?upload=failed');
            exit();
            break;
    }
} else {
    // Case when the file input field is not present in the form submission
    $_SESSION['upload_error'] = "File not provided.";
    header('Location: SupportForums.php?upload=failed');
    exit();
}
?>

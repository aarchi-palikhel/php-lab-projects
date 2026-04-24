<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 7 Q.NO.8</title>
</head>
<body>
<?php
// Define the file path
$file = 'config.php';

// Function to get file permissions in a readable format
function getFilePermissions($filePath) {
    if (file_exists($filePath)) {
        // Get the file permissions
        $permissions = fileperms($filePath);

        // Convert to octal representation
        $permissions = substr(sprintf('%o', $permissions), -4);

        return $permissions;
    } else {
        return 'File does not exist.';
    }
}

// Display the current permissions
echo 'Current permissions for "' . htmlspecialchars($file) . '": ' . getFilePermissions($file) . '<br>';

// Attempt to change file permissions to be readable and writable only by the owner (0600)
if (chmod($file, 0600)) {
    echo 'Permissions changed successfully.<br>';
} else {
    echo 'Error: Unable to change file permissions.<br>';
}

// Display the new permissions
echo 'New permissions for "' . htmlspecialchars($file) . '": ' . getFilePermissions($file) . '<br>';
?>
</body>
</html>
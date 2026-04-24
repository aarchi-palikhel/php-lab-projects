<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Define the file path
$file = 'temp.txt';

// Check if the file exists
if (file_exists($file)) {
    // Attempt to delete the file
    if (unlink($file)) {
        // Success message
        echo 'The file "' . htmlspecialchars($file) . '" has been successfully deleted.';
    } else {
        // Failure message
        echo 'There was an error deleting the file "' . htmlspecialchars($file) . '".';
    }
} else {
    // File does not exist message
    echo 'The file "' . htmlspecialchars($file) . '" does not exist.';
}
?>

</body>
</html>
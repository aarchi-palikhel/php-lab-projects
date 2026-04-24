<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 7 Q.NO.4</title>
</head>
<body>
<?php
// Define the file path
$file = 'data.csv';

// Check if the file exists
if (file_exists($file)) {
    // Get the file size
    $fileSize = filesize($file);
    
    // Display the file size
    echo '<h3>The file "' . htmlspecialchars($file) . '" exists and its size is ' . $fileSize . ' bytes.</h3>';
} else {
    // Display a message if the file does not exist
    echo '</h3>The file "' . htmlspecialchars($file) . '" does not exist in the current directory.</h3>';
}
?>

</body>
</html>
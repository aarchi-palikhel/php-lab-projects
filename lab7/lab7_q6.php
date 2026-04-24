<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Define the source and destination file paths
$oldFile = 'oldfile.txt';
$newFile = 'newfile.txt';

// Check if the source file exists
if (file_exists($oldFile)) {
    // Check if the destination file already exists
    if (file_exists($newFile)) {
        echo 'Error: The destination file "' . htmlspecialchars($newFile) . '" already exists.';
    } else {
        // Attempt to rename the file
        if (rename($oldFile, $newFile)) {
            echo 'File successfully renamed from "' . htmlspecialchars($oldFile) . '" to "' . htmlspecialchars($newFile) . '".';
        } else {
            echo 'Error: Unable to rename the file from "' . htmlspecialchars($oldFile) . '" to "' . htmlspecialchars($newFile) . '".';
        }
    }
} else {
    echo 'Error: The file "' . htmlspecialchars($oldFile) . '" does not exist.';
}
?>

</body>
</html>
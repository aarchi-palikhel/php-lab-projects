<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 7 Q.NO.10</title>
</head>
<body>
<?php
// Define the path to the file
$filePath = 'examp.txt'; // Replace with your file path

// Function to open a file for reading and handle errors
function openFileForReading($filePath) {
    // Check if the file exists
    if (!file_exists($filePath)) {
        echo 'Error: The file "' . htmlspecialchars($filePath) . '" does not exist.';
        return;
    }

    // Attempt to open the file for reading
    $handle = fopen($filePath, 'r');

    // Check if the file was opened successfully
    if ($handle) {
        echo 'File opened successfully.';

        // Read and display file content (optional)
        while (($line = fgets($handle)) !== false) {
            echo htmlspecialchars($line) . '<br>';
        }

        // Check for errors while reading the file
        if (!feof($handle)) {
            echo 'Error: Unexpected fgets() fail.';
        }

        // Close the file handle
        fclose($handle);
    } else {
        echo 'Error: Unable to open the file "' . htmlspecialchars($filePath) . '" for reading. Please check file permissions.';
    }
}

// Call the function to open the file and handle errors
openFileForReading($filePath);
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 7 Q.NO.9</title>
</head>
<body>
<?php
// Define the path to the large text file
$file = 'largefile.txt';

// Function to read the file line by line
function readFileLineByLine($filePath) {
    // Check if the file exists
    if (!file_exists($filePath)) {
        echo 'Error: The file "' . htmlspecialchars($filePath) . '" does not exist.';
        return;
    }

    // Open the file for reading
    $handle = fopen($filePath, 'r');
    if ($handle) {
        // Read the file line by line
        while (($line = fgets($handle)) !== false) {
            // Process each line (for example, display it)
            echo htmlspecialchars($line) . '<br>';
        }

        // Check for errors
        if (!feof($handle)) {
            echo 'Error: Unexpected fgets() fail.';
        }

        // Close the file handle
        fclose($handle);
    } else {
        echo 'Error: Unable to open the file "' . htmlspecialchars($filePath) . '" for reading.';
    }
}

// Call the function to read the file
readFileLineByLine($file);
?>
</body>
</html>
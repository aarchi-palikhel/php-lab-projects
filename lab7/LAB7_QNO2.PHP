<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 7 Q.NO.2</title>
</head>
<body>
    <?php
        $filename='example.txt';
        // Check if the file exists
        if (file_exists($filename)) {
            // Try to open the file for reading
            $file = fopen($filename, 'r');
            
            // Check if the file was successfully opened
            if ($file) {
                // Read the contents of the file
                $contents = fread($file, filesize($filename));
                
                // Close the file handle
                fclose($file);
                
                // Display the contents of the file
                echo '<h3>' . htmlspecialchars($contents) . '</h3>';
            } else {
                echo 'Error opening the file.';
            }
        } else {
            echo 'File does not exist.';
        }
?>
</body>
</html>
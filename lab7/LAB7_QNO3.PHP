<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 7 Q.NO.3</title>
</head>
<body>
    <?php
        $filename='example.txt';
        $dateTime=date('Y-m-d H:i:s');
        $file=fopen($filename,'a');
            if ($file) {
                $abc=$dateTime.PHP_EOL;
                fwrite($file,$abc);
                
                // Close the file handle
                fclose($file);
                
                // Display the contents of the file
                echo '<h3>Current date and time appended to the file successfully.</h3>';
            } else {
                echo 'Error opening the file.';
            }
    ?>
</body>
</html>
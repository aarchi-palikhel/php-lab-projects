<!DOCTYPE html>
<html>
<head>
    <title>Q.No.10(ii)</title>
    <style>
        pre {
            font-family: monospace;
            line-height: 1.2;
        }
    </style>
</head>
<body>
    <pre>
<?php
// Number of rows for the pattern
$rows = 5;

// Outer loop to handle the number of rows
for ($i = 1; $i <= $rows; $i++) {
    // Inner loop to handle the number of spaces
    for ($j = $rows; $j > $i; $j--) {
        // Print space
        echo " ";
    }
    // Inner loop to handle the number of stars
    for ($k = 1; $k <= $i; $k++) {
        // Print star
        echo "*";
    }
    // Print a new line after each row
    echo "\n";
}
?>
    </pre>
</body>
</html>

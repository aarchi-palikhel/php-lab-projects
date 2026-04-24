<!DOCTYPE html>
<html>
<head>
    <title>Q.NO.10(i)</title>
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
    // Inner loop to handle the number of columns (stars)
    for ($j = 1; $j <= $i; $j++) {
        // Print star
        echo "<b>*</b>";
    }
    // Print a new line after each row
    echo "\n";
}
?>
    </pre>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Q.No.12</title>
</head>
<body>
    <?php
    $str = "Hello, World!";

    // Demonstrating various string functions
    $length = strlen($str);
    $wordCount = str_word_count($str);
    $reversed = strrev($str);
    $uppercase = strtoupper($str);
    $lowercase = strtolower($str);
    $shuffled = str_shuffle($str);
    $substring = substr($str, 0, 5); // Get the first 5 characters

    echo "<h3>Original string: $str</h3>";
    echo "<h3>Length of the string: $length</h3>";
    echo "<h3>Word count of the string: $wordCount</h3>";
    echo "<h3>Reversed string: $reversed</h3>";
    echo "<h3>Uppercase string: $uppercase</h3>";
    echo "<h3>Lowercase string: $lowercase</h3>";
    echo "<h3>Shuffled string: $shuffled</h3>";
    echo "<h3>Substring (first 5 characters): $substring</h3>";
    ?>
</body>
</html>

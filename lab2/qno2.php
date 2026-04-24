<!DOCTYPE html>
<html>
<head>
    <title>Q.No.2</title>
</head>
<body>

<?php
function getFirstTwentyLetters($str) {
    // Remove leading and trailing whitespace
    $str = trim($str);
    
    // Check if the input string is less than or equal to 20 characters
    if (strlen($str) <= 20) {
        return $str;
    }
    
    // Find the position to cut off at 20 characters
    $pos = 20;
    
    // Ensure the last word is complete
    // Check if the 20th character is a space or if we need to backtrack to find a space
    while ($pos < strlen($str) && $str[$pos] !== ' ' && $str[$pos - 1] !== ' ') {
        $pos++;
    }
    
    // Return the substring from the start to the cutoff position
    return substr($str, 0, $pos);
}

// Example input string
$input = "This is a sample string to demonstrate requirements of PHP lab assignment.";

// Get the first twenty letters with complete last word
$result = getFirstTwentyLetters($input);

// Display the result
echo "<p><b>Original String:</b> $input</p>";
echo "<p><b>First Twenty Letters:</b>$result</p>";
?>

</body>
</html>

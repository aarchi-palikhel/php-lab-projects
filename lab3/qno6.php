<!DOCTYPE html>
<html lang="en">
<head>
    <title>Q.No.6</title>
</head>
<body>

<?php
// Sample paragraph containing email addresses
$paragraph = "Hello This is web technology II. We are learning PHP. Here are some email addresses: john.doe@example.com, jane.doe@website.org. 
Contact us at info@company.com for more information.";

// Regular expression pattern to match email addresses
$pattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';

// Perform a global regular expression match
preg_match_all($pattern, $paragraph, $matches);
echo "<h4>$paragraph</h4><br>";
echo "<h3>Identified email addresses in the above paragraph.</h3>";
// Check if any email addresses were found
if (!empty($matches[0])) {
    echo "<ul>";
    foreach ($matches[0] as $email) {
        echo "<li>$email</li>";
    }
    echo "</ul>";
} else {
    echo "No email addresses found.";
}
?>

</body>
</html>

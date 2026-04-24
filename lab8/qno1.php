<html>
<head>
    <title>Lab 8 Q.NO.1</title>
</head>   
<?php
setcookie("user_theme", "dark_mode", time() + 30 * 24 * 60 * 60, "/");

// Check if the cookie was set
if (isset($_COOKIE["user_theme"])) {
    echo "<h3>Cookie 'user_theme' has been set with the value: " . $_COOKIE["user_theme"].".</h3>";
} else {
    echo "<h3>Theme not set.</h3>";
}
?>
</html>
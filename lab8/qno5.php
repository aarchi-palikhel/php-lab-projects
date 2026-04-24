<head>
    <title>Lab 8 Q.NO.5</title>
</head> 

<?php
if(isset($_COOKIE["visit_count"])) {
    $visit_count = $_COOKIE["visit_count"] + 1;
} else {
    $visit_count = 1;
}

// Set the updated visit count cookie for 1 year
setcookie("visit_count", $visit_count, time() + (365 * 24 * 60 * 60), "/");

echo "<h3>You have visited this page " . $visit_count . " times.</h3>";
?>
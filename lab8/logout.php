<?php
session_start();
session_destroy(); // Destroy the session
header("Location: qno3.php"); // Redirect to login page
exit();
?>

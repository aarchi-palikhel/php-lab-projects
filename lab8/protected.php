<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: qno3.php");
    exit;
}
?>
<html>
<head>
    <title>Protected Page</title>
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>

<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: protected.php");
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Hardcoded credentials
    $username = 'admin';
    $password = 'secret';

    // Get the submitted credentials
    $submitted_username = $_POST['username'] ?? '';
    $submitted_password = $_POST['password'] ?? '';

    // Validate credentials
    if ($submitted_username === $username && $submitted_password === $password) {
        $_SESSION['username'] = $submitted_username;
        header("Location: protected.php");
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 8 Q.NO.2</title>
</head>
<body>
    <h2>Login Form</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

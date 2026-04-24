<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("Location: protected.php");
    exit();
}
if (isset($_COOKIE["username"])) {
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $_COOKIE["username"]; // Optionally store the username in session
    header("Location: protected.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $remember = isset($_POST["remember"]);

    // Check if username and password are correct
    if ($username == "a" && $password == "s") {
        $_SESSION["loggedin"] = true;

        // Set a cookie for 7 days if "Remember Me" is checked
        if ($remember) {
            setcookie("username", $username, time() + (7 * 24 * 60 * 60), "/");
        }
        header("Location: protected.php");
        exit();
    } else {
        echo "Invalid credentials.";
    }
}

// If the user is already remembered by the cookie
if (isset($_COOKIE["username"])) {
    echo "Welcome back, " . $_COOKIE["username"] . "!";
}
?>

<form method="POST" action="">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="checkbox" name="remember"> Remember Me<br>
    <button type="submit">Login</button>
</form>
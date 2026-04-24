<!DOCTYPE html>
<html>
<head>
    <title>Lab 5 Q.NO.3</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 10px;
        }
        input[type="submit"] {
            width:150px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="post">
        Username:
        <input type="text" name="username" id="username" required><br><br>
       Password:
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Function to sanitize input
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        // Retrieve and sanitize form data
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);

        // Hardcoded credentials
        $validUsername = 'SuperUser';
        $validPassword = 'California';

        // Authenticate user
        if ($username === $validUsername && $password === $validPassword) {
            echo "<p style='color: green;'>Login successful! Welcome, {$username} !!!.</p>";
        } else {
            echo "<p style='color: red;'>Authentication failed. Please check your username and password.</p>";
        }
    }

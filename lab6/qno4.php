<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 Q.NO.4</title>
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
        // Database connection parameters
        $servername = "localhost";
        $dbusername = "root"; // Your database username
        $dbpassword = ""; // Your database password
        $dbname = "aarchi_palikhel";
        // Create connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Check if the provided credentials match the hardcoded credentials
        if ($username === $validUsername && $password === $validPassword) {
            // Redirect to the students list page
            header("Location: list_students.php");
            exit();
        } else {
            echo "<p style='color: red;'>Authentication failed. Please check your username and password.</p>";
        }
        // Close connection
        $conn->close();
    }
    ?>
</body>
</html>

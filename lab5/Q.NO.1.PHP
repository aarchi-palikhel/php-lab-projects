<!DOCTYPE html>
<html>
<head>
    <title>Lab 5 Q.NO.1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        input[type="submit"] {
            width: 150px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        table {
            width: 50%;
            margin: 10px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
        <h2>User Input Form</h2>
        <form method="post" action="">
        <label for="uname">Username</label>
        <input type="text" name="uname" id="uname" required><br><br>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" required><br><br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required><br><br>
        <label for="gender">Gender</label><br>
        <input type="radio" name="gender" id="male" value="Male" required>Male
        <input type="radio" name="gender" id="female" value="Female" required>Female
        <input type="radio" name="gender" id="others" value="Others" required>Others
    <br><br>
        <label for="count">Country</label>
        <select name="count" id="count" required>
            <option value="">Select a country</option>
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
        </select><br><br>
        <label for="hobbies">Hobbies</label><br>
        <textarea name="hobbies" id="hobbies" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Submit">
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
            // Retrieve form data and sanitize input
            $uname = test_input($_POST["uname"]);
            $pass = test_input($_POST["pass"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
            $count = test_input($_POST["count"]);
            $hobbies = test_input($_POST["hobbies"]);
    

        // Validate email
       
        $regEx = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
       
        if (!preg_match($regEx, $email)) {
            echo "<p style='color: red; text-align: center;'>Invalid email format.</p>";
        } else {
            echo "<table border='1'>
                    <tr><th>Field</th><th>Value</th></tr>
                    <tr><td>Username</td><td>$uname</td></tr>
                    <tr><td>Password</td><td>" . str_repeat('*', strlen($pass)) . "</td></tr>
                    <tr><td>Email</td><td>$email</td></tr>
                    <tr><td>Gender</td><td>$gender</td></tr>
                    <tr><td>Country</td><td>$count</td></tr>
                    <tr><td>Hobbies</td><td>$hobbies</td></tr>
                </table>";
        }
    }
    ?>
</body>
</html>

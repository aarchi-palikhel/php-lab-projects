<html>
<head>
    <title>Form</title>
</head>
<body>
    <h2>User Input Form</h2>
    <form action="" method="post">
        Username: <input type="text" name="uname" id="uname"><br><br>
        Password: <input type="password" name="pass" id="pass"><br><br>
        Email: <input type="text" name="email" id="email"><br><br>
        Gender: <br>
            Male<input type="radio" name="gender" id="male" value="Male">
            Female<input type="radio" name="gender" id="female" value="Female">
            Others<input type="radio" name="gender" id="others" value="Others"><br><br>
        Country:
        <select name="count" id="count">
            <option value="">Select a Country</option>
            <option value="USA">USA</option>
            <option value="Nepal">Nepal</option>
            <option value="UK">UK</option>
        </select><br><br>
        Hobbies: <br><textarea name="hobby" id="hobby" rows="4" cols="30"></textarea><br><br>
        <input type="submit" name="Submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Initialize variables  
            $unameError = $passError = $emailError = $genderError = $countError = $hobbyError = "";
            // Function to sanitize input data
            function test_input($data) {
                return htmlspecialchars(stripslashes(trim($data)));
            }
            // Username validation
            if (empty($_POST["uname"])) {
                $unameError = "Username is Required!";
            } else {
                $uname = test_input($_POST["uname"]);
            }
            // Password validation
            if (empty($_POST["pass"])) {
                $passError = "Password is Required!";
            } else {
                $pass = test_input($_POST["pass"]);
            }
            // Email validation with regex
            $regex = "/^[a-zA-Z0-9_]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]{2,}/";
            if (empty($_POST["email"])) {
                $emailError = "Email is Required!";
            } else {
                $email = test_input($_POST["email"]);
                if (!preg_match($regex, $email)) {
                    $emailError = "Invalid Email Format!";
                }
            }
            // Gender validation
            if (empty($_POST["gender"])) {
                $genderError = "Gender is Required!";
            } else {
                $gender = test_input($_POST["gender"]);
            }

            // Country validation
            if (empty($_POST["count"])) {
                $countError = "Country is Required!";
            } else {
                $count = test_input($_POST["count"]);
            }

            // Hobby validation
            if (empty($_POST["hobby"])) {
                $hobbyError = "Hobby is Required!";
            } else {
                $hobby = test_input($_POST["hobby"]);
            }
            // If no errors, display data in a table
            if (empty($unameError) && empty($passError) && empty($emailError) && empty($genderError) && empty($countError) && empty($hobbyError)) {
                echo "<h3>Your Submitted Information:</h3>";
                echo "<table border='1' cellpadding='10' cellspacing='0' width:50%>";
                echo "<tr><th>Field</th><th>Value</th></tr>";
                echo "<tr><td>Username</td><td>$uname</td></tr>";
                echo "<tr><td>Password</td><td>".str_repeat('*',strlen($pass))."</td></tr>";
                echo "<tr><td>Email</td><td>$email</td></tr>";
                echo "<tr><td>Gender</td><td>$gender</td></tr>";
                echo "<tr><td>Country</td><td>$count</td></tr>";
                echo "<tr><td>Hobbies</td><td>$hobby</td></tr>";
                echo "</table>";
            } else {
                // Display error messages if there are validation errors
                echo "<p style='color:red;'>$unameError</p>";
                echo "<p style='color:red;'>$passError</p>";
                echo "<p style='color:red;'>$emailError</p>";
                echo "<p style='color:red;'>$genderError</p>";
                echo "<p style='color:red;'>$countError</p>";
                echo "<p style='color:red;'>$hobbyError</p>";
            }
        }
    ?>
</body>
</html>

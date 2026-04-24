<!DOCTYPE html>
<html>
<head>
    <title>Lab 5 Q.NO.2</title>
    <style>
        body{
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
    <?php
    $uname = "Aarchi Palikhel";
    $pass = "apalikhel";
    $email = "aarchi@gmail.com";
    $gender = "Female"; // Default gender can be set as required
    $count = "Nepal"; // Default count
    $hobbies = "Reading"; // Default hobbies

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $count = $_POST["count"];
        $hobbies = $_POST["hobbies"];

        $regEx = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        if (!preg_match($regEx, $email)) {
            echo "Invalid email pattern.<br>";
        } else {
            echo "<table border='1'>
                <tr><th>Field</th><th>Value</th></tr>
                <tr><td>UserName</td><td>$uname</td></tr>
                 <tr><td>Password</td><td>" . str_repeat('*', strlen($pass)) . "</td></tr>
                <tr><td>Email</td><td>$email</td></tr>
                <tr><td>Gender</td><td>$gender</td></tr>
                <tr><td>Country</td><td>$count</td></tr>
                <tr><td>Hobbies</td><td>$hobbies</td></tr>
            </table>";
        }
    }
    ?>

    <form method="post">
        Username: <input type="text" name="uname" value="<?php echo ($uname); ?>" required><br><br>
        Password: <input type="password" name="pass" value="<?php echo ($pass); ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo ($email); ?>" required><br><br>
        Gender:<br>
        <input type="radio" id="male" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>>Male
        <input type="radio" id="female" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>>Female
        <input type="radio" id="others" name="gender" value="Others" <?php if ($gender == "Others") echo "checked"; ?>>Others<br><br>
        Country:
        <select name="count" required>
            <option value="">Select a country</option>
            <option value="Nepal" <?php if ($count == "Nepal") echo "selected"; ?>>Nepal</option>
            <option value="India" <?php if ($count == "India") echo "selected"; ?>>India</option>
            <option value="USA" <?php if ($count == "USA") echo "selected"; ?>>USA</option>
        </select><br><br>
        Hobbies: <textarea name="hobbies"><?php echo($hobbies); ?></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>lab 6 Q.NO.3</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="" method="post">
        First name: <input type="text" name="fname" required><br><br>
        Last name: <input type="text" name="lname" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <input type="radio" name="gender" value="Others" required> Others<br><br>
        Country:
        <select name="country" required>
        <option value="">Select a country!</option>
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username_db = "root"; // Default MySQL user
    $password_db = ""; // Default is no password
    $dbname = "aarchi_palikhel"; // Your existing database
    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // Collect and sanitize input data
    $fname = $conn->real_escape_string($_POST['fname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $password = $conn->real_escape_string($_POST['password']);
    $email = $conn->real_escape_string($_POST['email']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $country = $conn->real_escape_string($_POST['country']);
    // Validate email format
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Insert data into the tbl_Students table
    $sql = "INSERT INTO tbl_Students (FirstName, LastName, Email, Gender, DateOfBirth, 
    EnrollmentDate)

    VALUES ('$fname','$lname', '$email', '$gender', NULL,

    CURRENT_TIMESTAMP)";
    if ($conn->query($sql) === TRUE) {
    echo "User added successfully.<br>";
    // Clear the form values after successful submission
    echo "<script>document.querySelector('form').reset();</script>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    } else {
    echo "Invalid email format!";
    }
    // Close the connection
    $conn->close();
    }
    ?>
</body>
</html>
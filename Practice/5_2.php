<?php
// Default values
$uname = "aarchi";
$pass = "abcde";
$email = "ap@gmail.com";
$gender = "female";
$count = "us";
$hobby = "";  // Set to empty if not submitted yet

// Initialize error variables
$uerror = $perror = $eerror = $gerror = $cerror = '';

// Function to sanitize input
function test($data) {
    return stripslashes(trim($data));  // Only removes slashes and trims spaces
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty($_POST["uname"])) {
        $uerror = "Username required";
    } else {
        $uname = test($_POST["uname"]);
    }

    // Validate password
    if (empty($_POST["pass"])) {
        $perror = "Password required";
    } else {
        $pass = test($_POST["pass"]);
    }

    // Validate email
    $reg = '/^[a-zA-Z0-9_]+@[a-zA-Z0-9_]+\.[a-zA-Z]{2,}$/';
    if (empty($_POST["email"])) {
        $eerror = "Email required";
    } else {
        $email = test($_POST["email"]);
        if (!preg_match($reg, $email)) {
            $eerror = "Invalid email format";
        }
    }

    // Validate gender
    if (empty($_POST["gender"])) {
        $gerror = "Gender required";
    } else {
        $gender = test($_POST["gender"]);
    }

    // Validate country
    if (empty($_POST["count"])) {
        $cerror = "Country required";
    } else {
        $count = test($_POST["count"]);
    }

    // Display the form data if no errors
    if (empty($uerror) && empty($perror) && empty($eerror) && empty($gerror) && empty($cerror)) {
        echo "<h3>Your Submitted Information:</h3>";
        echo "<table border='1' cellpadding='10' cellspacing='0' width='50%'>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        echo "<tr><td>Username</td><td>$uname</td></tr>";
        echo "<tr><td>Password</td><td>" . str_repeat('*', strlen($pass)) . "</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>Gender</td><td>$gender</td></tr>";
        echo "<tr><td>Country</td><td>$count</td></tr>";
        echo "<tr><td>Hobbies</td><td>$hobby</td></tr>";
        echo "</table>";
    } else {
        // Display error messages
        echo "<p style='color:red;'>$uerror</p>";
        echo "<p style='color:red;'>$perror</p>";
        echo "<p style='color:red;'>$eerror</p>";
        echo "<p style='color:red;'>$gerror</p>";
        echo "<p style='color:red;'>$cerror</p>";
    }
}
?>

<form action="" method="post">
    <!-- Username -->
    Name: <input type="text" name="uname" id="uname" value="<?php echo $uname; ?>"><br><br>

    <!-- Password -->
    Password: <input type="password" name="pass" id="pass" value="<?php echo $pass; ?>"><br><br>

    <!-- Email -->
    Email: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>

    <!-- Gender -->
    Gender: <br>
    <input type="radio" name="gender" id="male" value="male" <?php if ($gender === 'male') echo 'checked'; ?>> Male
    <input type="radio" name="gender" id="female" value="female" <?php if ($gender === 'female') echo 'checked'; ?>> Female
    <input type="radio" name="gender" id="others" value="others" <?php if ($gender === 'others') echo 'checked'; ?>> Others
    <br><br>

    <!-- Country -->
    Country:
    <select name="count" id="count">
        <option value="us" <?php if ($count === 'us') echo "selected"; ?>>US</option>
        <option value="nepal" <?php if ($count === 'nepal') echo "selected"; ?>>Nepal</option>
    </select><br><br>

    <!-- Hobbies -->
    Hobbies: <textarea name="hobby" id="hobby"><?php echo $hobby; ?></textarea><br><br>

    <input type="submit" value="Submit">
</form>

<!DOCTYPE html>
<html>
<head>
    <title>Q.No.13</title>
</head>
<body>

<form method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" /></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="male" id="male" /><label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female" /><label for="female">Female</label>
                <input type="radio" name="gender" value="others" id="others" /><label for="others">Others</label>
            </td>
        </tr>
        <tr>
            <td>Country:</td>
            <td>
                <select name="country">
                    <option value="">Select Country</option>
                    <option value="Nepal">Nepal</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                   
                    <!-- Add more countries as needed -->
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Register" /></td>
        </tr>
    </table>
</form>

<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are set

        $name = $_POST["name"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $country = $_POST["country"];
        
        echo "<h3>Submitted Information:</h3>";
        echo "Name: $name <br>";
        echo "Password: ******** <br>"; // Masking password for security
        echo "Email: $email <br>";
        echo "Gender: $gender <br>";
        echo "Country: $country <br>";
    } else {
        echo "<p>Please fill out all fields.</p>";
    }

?>

</body>
</html>
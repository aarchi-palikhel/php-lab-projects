<html>
<head>
    <title>Student Info</title>
</head>
<body>
    <form action="" method="post">
        FullName: <input type="text" name="sname" required><br><br>
        DOB: <input type="date" name="dob" required><br><br>
        Email: <input type="text" name="email" required><br><br>
        Gender: <br>
        <input type="radio" name="gender" id="male">Male
        <input type="radio" name="gender" id="female">Female
        <input type="radio" name="gender" id="others">Others
        Country: <select name="count" id="count">
            <option value="">Select a Country</option>
            <option value="USA">USA</option>
            <option value="Nepal">Nepal</option>
            <option value="UK">UK</option>
        </select>
        <input type="submit" value="Submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="practice";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if($conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
            }
            $snameError = $dobError = $emailError = $genderError = $countError = "";
            if (empty($_POST["sname"])) {
                $snameError = "Username is Required!";
            } else {
                $sname=$conn->real_escape_string($_POST["sname"]);
            }
            if (empty($_POST["dob"])) {
                $dobError = "DOB is Required!";
            } else {
                $dob=$conn->real_escape_string($_POST["dob"]);
            }
            // Email validation with regex
            $regex = "/^[a-zA-Z0-9_]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]{2,}/";
            if (empty($_POST["email"])) {
                $emailError = "Email is Required!";
            } else {
                $email=$conn->real_escape_string($_POST["email"]);
                if (!preg_match($regex, $email)) {
                    $emailError = "Invalid Email Format!";
                }
            }
            if (empty($_POST["gender"])) {
                $genderError = "Gender is Required!";
            } else {
                $gender=$conn->real_escape_string($_POST["gender"]);
            }
            if (empty($_POST["count"])) {
                $countError = "Country is Required!";
            } else {
                $count=$conn->real_escape_string($_POST["count"]);
            }
            // If no errors, display data in a table
            if (empty($unameError) && empty($passError) && empty($emailError) && empty($genderError) && empty($countError) && empty($hobbyError)) {
                $sql="INSERT INTO STUDENT(S_NAME,DATEOFBIRTH,EMAIL,GENDER,ENROLLMENT_DATE,country)
                VALUES('$sname','$dob','$email','$gender',CURRENT_TIMESTAMP,'$count')";
                if($conn->query($sql)===TRUE){
                    echo"<p>Values inserted Successfully!</p>";
                }else{
                    echo"<p>Error in Insertion: ".$conn->error."</p>";
                }
            } else {
                echo "<p style='color:red;'>$snameError</p>";
                echo "<p style='color:red;'>$dobError</p>";
                echo "<p style='color:red;'>$emailError</p>";
                echo "<p style='color:red;'>$genderError</p>";
                echo "<p style='color:red;'>$countError</p>";
            }
            $conn->close();
        }
    ?>
</body>
</html>

<?php
    $uname="aarchi";
    $pass="abcde";
    $email="ap@gmail.com";
    $gender="female";
    $count="us";
    $hobby="";
    function test($data){
        return stripslashes(htmlspecialchars(trim($data)));
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
    $uerror=$perror=$eerror=$gerror=$cerror='';
    if(empty($_POST["uname"])){
        $uerror="username required";
    }else{
        $uname=test($_POST["uname"]);
    }
    if(empty($_POST["pass"])){
        $perror="pass required";
    }else{
        $pass=test($_POST["pass"]);
    }
    $reg='/^[a-zA-Z0-9_]+@[a-zA-Z0-9_]+\.[a-zA-Z]{2,}/';
    if(empty($_POST["email"])){
        $eerror="email required";
    }else{
        $email=test($_POST["email"]);
        if(!preg_match($reg,$email)){
            $eerror="email required";
        }
    }
    if(empty($_POST["gender"])){
        $gerror="gender required";
    }else{
        $gender=test($_POST["gender"]);
    }
    if(empty($_POST["count"])){
        $cerror="count required";
    }else{
        $count=test($_POST["count"]);
    }
    if(empty($uerror) && empty($perror) && empty($eerror) && empty($gerror) && empty($cerror)){
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
            echo "<p style='color:red;'>$uerror</p>";
            echo "<p style='color:red;'>$perror</p>";
            echo "<p style='color:red;'>$eerror</p>";
            echo "<p style='color:red;'>$gerror</p>";
            echo "<p style='color:red;'>$cerror</p>";
    }}   
?>
<form action="" method="post">
    name: <input type="text" name="uname" id="uname" value="<?php echo $uname;?>"><br><br>
    password: <input type="password" name="pass" id="pass" value="<?php echo $pass; ?>"><br><br>
    email: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
    gender: <br>
    <input type="radio" name="gender" id="male" value="male"<?php if($gender==='male') echo 'checked'; ?>>male
    <input type="radio" name="gender" id="female" value ="female"<?php if($gender==='female') echo 'checked'; ?>>female
    <input type="radio" name="gender" id="others" value="others"<?php if($gender==='others') echo"checked"; ?>>others <br><br>
    country: <select name="count" id="count">
        <option value="us"<?php if($gender==='us') echo"checked"; ?>>us</option>
        <option value="nepal"<?php if($gender==='nepal') echo"checked"; ?>>nepal</option>
    </select><br><br>
    hobbies<textarea name="hobby" id="hobby"></textarea>
    <input type="submit" value="Submit">
</form>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <h2>User Input Form</h2>
    <form action="" method="post">
        Username: <input type="text" name="uname" id="uname"><br><br>
        Password: <input type="password" name="pass" id="pass"><br><br>
        <input type="submit" name="Submit" value="Submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            function test_input($data){
                return stripslashes(htmlspecialchars(trim($data)));
            }
            $userError=$passError= "";
            if(empty($_POST["uname"])){
                $userError="Username is required!";
            }else{
                $uname=test_input($_POST["uname"]);
            }
            if(empty($_POST["pass"])){
                $passError="Password is required!";
            }else{
                $pass=test_input($_POST["pass"]);
            }
            $valid_user="SuperUser";
            $valid_pass="California";
            if(empty($userError) && empty($passError)){
                if($uname===$valid_user && $pass===$valid_pass){
                    echo"<p style='color:green; font-size:20px; text-align:center;'>Login Successful!!!</p>";
                }else{
                    echo"<p style='color:red; text-align:center; font-size:20px;'>Invalid Username and Password!!!</p>";
                }
            }else{
                echo"<p style='color:red;'>{$userError}</p>";
                echo"<p style='color:red;'>{$passError}</p>";
            }
        }
    ?>
</body>
</html>
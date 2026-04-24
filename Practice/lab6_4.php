<form action="" method="post">
    username: <input type="text" name="uname" id="uname"><br><br>
    password: <input type="password" name="pass" id="pass"><br><br>
    <input type="submit" value="Login">
</form>
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="labpractice";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $nerror=$perror='';
    if(empty($_POST["uname"])){
        $nerror="name reqd";
    }else{
        $uname=$conn->real_escape_string($_POST["uname"]);
    }
    if(empty($_POST["pass"])){
        $nerror="pass reqd";
    }else{
        $pass=$conn->real_escape_string($_POST["pass"]);
    }
    $validu="aarchi";
    $validp="palikhel";
    if(empty($nerror) && empty($perror)){
        if($uname===$validu && $pass===$validp){
            header("location:lab64.php");
            exit();
        }
    }else{
        echo"<p style='color:red;'>{$nerror}</p>";
        echo"<p style='color:red;'>{$perror}</p>";
    }
    $conn->close();
?>
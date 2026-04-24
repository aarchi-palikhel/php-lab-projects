<form action="" method="post">
    <input type="submit" name="create_db" value="create_db"><br><br>
    <input type="submit" name="create_tbl" value="create_tbl">
    
</form>
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="labpractice";

    $conn=new mysqli($servername,$username,$password);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    if(isset($_POST["create_db"])){
        $sql="CREATE DATABASE IF NOT EXISTS labpractice";
        if($conn->query($sql)===TRUE){
            echo"connected succesful.";
        }else{
            echo"connection failure: ".$conn->error;
        }
    }

    if(isset($_POST["create_tbl"])){
        $conn->select_db($dbname);
        $sql="CREATE TABLE IF NOT EXISTS student(
            s_id int auto_increment primary key,
            s_name varchar(50) not null,
            s_email varchar(50) not null,
            enroll datetime default current_timestamp
        )";
        if($conn->query($sql)===TRUE){
            echo"table created succesful.";
        }else{
            echo"creation failure: ".$conn->error;
        }
    }
?>
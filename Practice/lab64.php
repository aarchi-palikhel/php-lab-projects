<table border="1">
    <tr>
        <th>S_ID</th>
        <th>S_NAME</th>
        <th>S_EMAIL</th>
        <th>enroll</th>
    </tr>

<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="labpractice";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $sql="SELECT * FROM student";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            echo"<tr>";
            echo"<td>{$rows["s_id"]}</td>";
            echo"<td>{$rows["s_name"]}</td>";
            echo"<td>{$rows["s_email"]}</td>";
            echo"<td>{$rows["enroll"]}</td>";
            echo"</tr>";
        }
    }
?>
</table>
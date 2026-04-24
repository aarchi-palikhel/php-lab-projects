<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 Q.NO.4</title>
</head>
<body>
    <?php
    // Database connection parameters
    $servername = "localhost";
    $dbusername = "root"; // Your database username
    $dbpassword = ""; // Your database password
    $dbname = "aarchi_palikhel";
    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Fetch students from the database
    $sql = "SELECT * FROM tbl_students";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<h2>List of Students</h2>";
        echo "<table border='1'>
                <tr>
                    <th>StudentId</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>DateOfBirth</th>
                    <th>Gender</th>
                    <th>EnrollmentDate</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["StudentId"]."</td>
                    <td>".$row["FirstName"]."</td>
                    <td>".$row["LastName"]."</td>
                    <td>".$row["Email"]."</td>
                    <td>".$row["DateOfBirth"]."</td>
                    <td>".$row["Gender"]."</td>
                    <td>".$row["EnrollmentDate"]."</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No students found.";
    }
    // Close connection
    $conn->close();
    ?>
</body>
</html>

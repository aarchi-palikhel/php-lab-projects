<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Lab 6 Q.NO.1</title>
</head>
<body>
  <h1>Create Database</h1>
  <form action="QNO1.php" method="post">
    <input type="submit" name="create_db" value="Create Database">
  </form>
  <?php
  if (isset($_POST['create_db'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";            // your database password
    $database = "aarchi_palikhel";          // the name of the database you want to create
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // SQL query to create database
    $sql = "CREATE DATABASE IF NOT EXISTS $database";
    if ($conn->query($sql) === TRUE) {
      echo "<p>Database '$database' created successfully.</p>";
    } else {
      echo "<p>Error creating database: " . $conn->error . "</p>";
    }
    // Close connection
    $conn->close();
  }
  ?>
</body>
</html>

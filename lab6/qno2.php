<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Lab 6 Q.NO.2</title>
</head>
<body>
  <h1>Create Database and Table</h1>
  <form action="" method="post">
    <input type="submit" name="create_table" value="Create Table">
  </form>
  <?php
  // Database connection settings
  $servername = "localhost";
  $username = "root";
  $password = "";            // Your database password
  $dbname = "aarchi_palikhel";   // The name of the database where you want to create the table
  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if (isset($_POST['create_db'])) {
    // SQL query to create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";


    if ($conn->query($sql) === TRUE) {
      echo "<p>Database '$dbname' created successfully.</p>";
    } else {
      echo "<p>Error creating database: " . $conn->error . "</p>";
    }
  }
  if (isset($_POST['create_table'])) {
    // Select the database
    $conn->select_db($dbname);
    // SQL to create table
    $sql = "CREATE TABLE IF NOT EXISTS tbl_Students (
            StudentId INT AUTO_INCREMENT PRIMARY KEY,
            FirstName VARCHAR(50) NOT NULL,
            LastName VARCHAR(50) NOT NULL,
            DateOfBirth DATE,
            Email VARCHAR(100),
            Gender VARCHAR(10),
            EnrollmentDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
    // Execute the query
    if ($conn->query($sql) === TRUE) {
      echo "<p>Table 'tbl_Students' created successfully.</p>";
    } else {
      echo "<p>Error creating table: " . $conn->error . "</p>";
    }
  }
  // Close connection
  $conn->close();
  ?>
</body>
</html>

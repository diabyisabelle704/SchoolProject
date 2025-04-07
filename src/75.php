<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to delete a record from the 'students' table
$sql = "DELETE FROM `students` WHERE student_id = 10";
$conn->query($sql);

// Close connection
$conn->close();
?>

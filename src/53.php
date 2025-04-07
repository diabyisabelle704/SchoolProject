<?php
// Your PHP code goes here

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

// Create a new database if it doesn't exist
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your PHP code goes here

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

// Create a new database if it doesn't exist
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - name: " . $row["name"]. "\n";
    }
} else {
    echo "0 results";
}

$conn->close();

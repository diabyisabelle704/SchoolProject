
<?php

// Connect to the database
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$result = $conn->query("SELECT * FROM users");

// Print out the results
while($row = $result->fetch_assoc()) {
    echo $row["name"] . "\n";
}

// Close the connection
$conn->close();
?>
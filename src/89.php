<?php
// Initialize database connection
$host = "localhost";
$db   = "schoolproject";
$user = "root";
$pass = "";

// Establish database connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example SQL query
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>

<?php
// Define the database credentials
$dbhost = "localhost";
$dbname = "schoolproject";
$database = "schoolproject";

// Connect to the database
$conn = mysqli_connect($dbhost, $dbname, 'password', $database);

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_error($conn));
}

// Example query for a table in the database
$sql = "SELECT * FROM users";

// Execute the query
$result = mysqli_query($conn, $sql);

// Fetch all rows from the result set
while ($row = mysqli_fetch_assoc($result)) {
    echo "Username: " . $row['username'] . "<br>";
}

// Close the database connection
mysqli_close($conn);

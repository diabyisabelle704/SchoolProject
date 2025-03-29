<?php
// Connect to the database
$db = new mysqli("localhost", "username", "password", "database_name");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Example query for fetching data
$result = $db->query("SELECT * FROM table_name");

// Example loop to display results
foreach ($result as $row) {
    echo "Name: " . $row["name"] . "\n";
    echo "Age: " . $row["age"] . "\n";
}

// Close the database connection
$db->close();
?>

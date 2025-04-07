<?php
// Assuming you have a MySQL database connection
mysql_connect("localhost", "username", "password");

// SQL query to select data from a table
$result = mysql_query("SELECT * FROM students");

// Fetch each row of the result set and print it out
while ($row = mysql_fetch_assoc($result)) {
    echo $row["name"] . "\n";
}

// Close the database connection
mysql_close();
?>

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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<table><tr><th>ID</th><th>Name</th></tr>";
while($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td></tr>";
}
echo "</table>";

$conn->close();
?>

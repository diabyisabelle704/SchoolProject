
<?php 
$conn = new mysqli("localhost", "root", "", "schoolproject");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
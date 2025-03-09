 <?php
// connect to the database 
$conn = new mysqli("localhost", "root", "", "school");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get the data from the form
$name = $_POST["name"];
$age = $_POST["age"];

// insert the data into the database
$sql = "INSERT INTO students (name, age) VALUES ('$name', '$age')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// close the database connection
$conn->close();
?>
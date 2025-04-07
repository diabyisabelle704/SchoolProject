<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_project";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // select query
    $sql = "SELECT * FROM students";
    
    // execute query and get results
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='student'>";
            echo "Name: " . $row["name"] . "</br>";
            echo "Age: " . $row["age"] . "</br>";
            echo "Address: " . $row["address"] . "</br>";
            echo "Email: " . $row["email"] . "</br>";
            echo "<button class='delete' onclick='deleteStudent($row["id"])' style='display:none;'>Delete</button>";
            echo "</div>";
        }
    } else {
        echo "No students found.";
    }

    // close connection
    $conn->close();
?>

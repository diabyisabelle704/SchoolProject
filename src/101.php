<?php
    // Initialize database connection
    $conn = new mysqli("localhost", "root", "password", "school_project");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

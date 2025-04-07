<?php
// Initialize the session
session_start();

// Define variables and constants
$email = "your_email@example.com";
$password = "password123";

// Compare the entered password with the stored one
if (password_verify($password, $_POST['password'])) {
    // User is logged in
} else {
    echo "Invalid username or password.";
}
?>

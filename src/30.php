<?php
// Example of handling user input for an API call
$input = $_POST['input']; // This is the data passed from another function

if ($input == "example_input") {
    echo "Hello, world!";
} else {
    echo "Invalid input";
}
?>

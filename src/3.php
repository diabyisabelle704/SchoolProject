
<?php
  // Get the user's input from the form
  $input = $_POST["input"];

  // Validate the input to make sure it is a number and greater than 0
  if (!is_numeric($input) || $input <= 0) {
    echo "Invalid input. Please enter a positive number.";
    exit;
  }

  // Calculate the square root of the input
  $result = sqrt($input);

  // Display the result to the user
  echo "The square root of $input is $result";
?>
<?php
// Example PHP code for random generation of data

// Generating random integer between 1 and 5
$randomInt = rand(1, 5);

// Generating random string of length 8
$string = str_random(8);

// Adding the generated values to a variable
$data = $randomInt . '_' . $string;

// Returning the final data array
return $data;
?>

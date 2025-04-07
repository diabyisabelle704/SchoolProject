<?php
// This is a simple PHP program to demonstrate basic features.
// For more complex tasks, consider using PHP frameworks like Laravel or Symfony.

// Basic PHP code
echo "Hello, World!";

// Check if an array exists
$myArray = [1, 2, 3];
if (isset($myArray[0])) {
    echo "The first element of the array is: " . $myArray[0];
} else {
    echo "The array does not have a first element.";
}

// Concatenate strings using PHP
$string1 = "Hello";
$string2 = "World";
echo "String concatenated: " . $string1 . $string2;

// Check if two values are of different types
$color = "red";
$value = 5;
if (is_int($value) && is_string($color)) {
    echo "Value and color are both integers.";
} else {
    echo "Value or color is not as expected.";
}

// Use built-in functions in PHP
$myNumber = 10;
echo "The sum of two numbers: " . addNumbers(3, 5);

// Define a function to square a number
function addNumbers($num1, $num2) {
    return $num1 * $num2;
}

addNumbers(4, 7); // This should output 28

// Execute multiple lines of PHP code in one script
echo "This is the end.";
?>

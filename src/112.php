<?php
// This is an example PHP code.
// It demonstrates basic operations such as echo, print, and isset().
// The code runs in your local environment.

// Example: printing a message
echo "Hello, World!";

// Example: accessing variable $name
$name = "Alice";
echo "Hello, $name."; // Output: Hello, Alice.

// Example: checking if a value is set using isset()
$name = "";
if (isset($name)) {
    echo "Name is set.";
}

// Example: getting and displaying an array value
$array = [1, 2, 3];
echo "Array values: ", $array[0], $array[1], $array[2];

// Example: accessing a variable's value if it exists
$my_variable = 5;
if (isset($my_variable)) {
    echo "The variable my_variable is set.";
}

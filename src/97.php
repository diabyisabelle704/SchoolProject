<?php
// Define your variables here
$your_variables = array(
    'variable1' => 'value1',
    'variable2' => 'value2',
    // Add more variables as needed
);

// Generate a random value for one of the variables
$random_value = $your_variables[array_rand($your_variables)];

// Output the random value to the user
echo "The random value is: $random_value";


<?php

// This function will generate a random integer between 1 and 10
function getRandomInteger() {
    return rand(1, 10);
}

// This function will generate a random string of length 5
function getRandomString() {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    for ($i = 0; $i < 5; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

// This function will generate a random boolean value (true or false)
function getRandomBoolean() {
    return rand(0, 1) ? true : false;
}

// This function will generate a random date between two given dates
function getRandomDate($start, $end) {
    $difference = abs($end - $start);
    $random_date = $start + ($difference * rand(0, 1));
    return date('Y-m-d', $random_date);
}

// This function will generate a random time between two given times
function getRandomTime($start, $end) {
    $difference = abs($end - $start);
    $random_time = $start + ($difference * rand(0, 1));
    return date('H:i:s', $random_time);
}

?>
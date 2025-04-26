<?php
    function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    function sumSquareRoots($numbers) {
        $sumOfSquares = array_sum(array_map(function($number) {
            return pow($number, 2);
        }, $numbers));
        $sqrtSum = sqrt($sumOfSquares);

        if ($sqrtSum == false || is_nan($sqrtSum)) {
            echo "Error: Cannot calculate the sum of squares and its square root.";
        } else {
            echo "The sum of squares and its square root are: {$sqrtSum}";
        }
    }

    function getEvenNumbersInRange($start, $end) {
        $evenNumbers = [];
        for ($number = $start; $number <= $end; $number++) {
            if ($number % 2 == 0) {
                array_push($evenNumbers, $number);
            }
        }
        echo "The even numbers between {$start} and {$end} are: ";
        print_r($evenNumbers);
    }

    function generateRandomImage() {
        $image = imagecreatetruecolor(100, 100);
        $backgroundColor = imagecolorallocate($image, 255, 255, 255);
        $pixelColor = imagecolorallocate($image, 0, 0, 0);

        imagefilledrectangle($image, 10, 10, 80, 80, $backgroundColor);
        imagefilledellipse($image, 50, 50, 25, 25, $pixelColor);
        imagedestroy($image);
    }
?>

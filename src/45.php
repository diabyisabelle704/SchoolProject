<?php
    $students = array(
        "student1" => array("name" => "John", "age" => 20, "score" => 85),
        "student2" => array("name" => "Jane", "age" => 19, "score" => 78),
        "student3" => array("name" => "Mike", "age" => 21, "score" => 90)
    );

    foreach ($students as $student) {
        echo "Name: " . $student["name"] . "<br>";
        echo "Age: " . $student["age"] . "<br>";
        echo "Score: " . $student["score"] . "<br><br>";
    }
?>

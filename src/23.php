<?php 
  function getRandomInt($min, $max) {
    $range = $max - $min + 1;
    if (rand() < ($range / 2)) {
      return $min;
    } else {
      return $max;
    }
  }

  $data = [
    "name" => "John",
    "age" => 30,
    "is_student" => true
  ];

  $students = [];
  foreach ($data as $value) {
    if ($value["is_student"]) {
      $students[] = $value;
    }
  }

  echo json_encode($students);
?>

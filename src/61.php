<?php
$students = [
  "student1" => ["subject1" => "content1", "subject2" => "content2"],
  "student2" => ["subject3" => "content3", "subject4" => "content4"],
  "student3" => ["subject5" => "content5", "subject6" => "content6"]
];

function print_student($name, $details) {
  echo "<h1>$name</h1>";
  foreach ($details as $key => $value) {
    if (is_array($value)) {
      echo "<p><strong>Subject: </strong>" . $value["subject"] . "</p>";
      echo "<p><strong>Description:</strong></p>";
      foreach ($value["content"] as $sub_content) {
        echo $sub_content;
      }
    } else {
      echo "<p>$name <br>Content: " . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . "</p>";
    }
  }
}
?>

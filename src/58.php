<?php 
$students = array(1, 2, 3);
foreach ($students as $key => $value) {
    echo "Student number: $value, Age: " . age($value) . "<br>";
}
function age(int $student_id): int {
    return $student_id - 5;
}
?>

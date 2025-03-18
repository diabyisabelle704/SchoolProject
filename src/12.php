<?php
class Student {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$students = array(
    new Student("John", 15),
    new Student("Jane", 12),
    new Student("Bob", 18)
);

foreach ($students as $student) {
    echo $student->getName() . " is " . $student->getAge() . " years old.";
}
?>
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

$student1 = new Student("Alice", 25);
echo "Student 1: " . $student1->getName() . ", Age: " . $student1->getAge();

$student2 = new Student("Bob", 30);
echo "\n\nStudent 2: " . $student2->getName() . ", Age: " . $student2->getAge();
?>
 <?php
class Student{
    public $name;
    public $grade;
    function __construct($name,$grade){
        $this->name = $name;
        $this->grade = $grade;
    }
}
function get_students(){
    return array(new Student("Jason","A"), new Student("Mia","B+"));
}
?>
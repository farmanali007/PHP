<?php

use student as GlobalStudent;

class student{
    public $name;
    public $course;

    public function __construct($n){
        $this->name = $n;
    }
}
$student1 = new student("Farman ALi");
// $student2 = clone $student1;//pass by value
$student2 =  $student1;//by default pass by reference
$student2->name = "kamran ali";
echo $student1->name;
echo "<br>";
echo $student2->name;


?>
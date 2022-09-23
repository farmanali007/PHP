<?php
class student{
    public $name;
    public $course;
    public function __construct($n)
    {
        $this->name = $n;
    }
  public function setCourse(course  $c){
    $this->course = $c;
  }
public function __clone()
{
    $this->course = clone $this->course;
}
}


class course{
    public $cName;
    public function __construct($cn)
    {
        $this->cName = $cn;
    }
}
        $student1 = new student("farman ali");
        $course1 = new course("PHP");
        $student1->setCourse($course1);
        $student2 = clone $student1;
        $student2->name = "kamran";
        $student2->course->cName = "Python";

        echo "<pre>";
        print_r($student1);
        print_r($student2);
        echo "</pre>";

       
?>
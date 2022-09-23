<?php
class person{
    public $name, $age;
    function __construct($name="NO Name" , $age=0 ){
   
        $this->name = $name;
        $this->age = $age;
    }
   
    function show(){
        echo  $this->name . "-". $this->age . "<br>";
    }
  
}
$p1 = new person();
$p2 = new person("Engr.Farman Ali", 23);
$p3 = new person("farman Ali",23);
$p1->show();
$p2->show();
$p3->show();


?>
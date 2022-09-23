<?php

use myclass as GlobalMyclass;

class myclass{
    public $course;
    private $first_name;
    private $last_aname;
    private $detail = ['name'=> 'Test Name', 'age'=>20];

    public function setName($fname, $lname){
            $this->first_name=$fname;
            $this->last_name=$lname;
    }
    public function __isset($name)
    {
        echo isset($this->detail[$name]);
    }


}

$test = new myclass("farman", "ali");
$test->setName("farman", "ali");
echo isset($test->name);


?>
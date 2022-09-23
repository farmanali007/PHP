<?php

use myclass as GlobalMyclass;

class myclass{
    public $course="PHP";
    private $first_name;
    private $last_aname;
    public function setName($fname, $lname){
            $this->first_name=$fname;
            $this->last_name=$lname;
    }
    public function __unset($property)
    {
        unset($this->$property);
    }


}

$test = new myclass();
$test->setName("engr.farman", "ali");
unset($test->first_name);
print_r($test);


?>
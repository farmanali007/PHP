<?php
class myclass{
    public $course="PHP";
    private $first_name;
    private $last_aname;
    public function setName($fname, $lname){
            $this->first_name=$fname;
            $this->last_name=$lname;
    }
    public function __sleep(){
        return ["first_name", "last_name"];
    }
    public function __wakeup()
    {
       echo "this is wakeup method";   
    }
  

}

$test = new myclass();
$test->setName("engr.farman", "ali");
$slr = serialize($test);
echo $slr;
$us = unserialize($slr);
echo "<pre>";
print_r($us);
echo "</pre>";


?>
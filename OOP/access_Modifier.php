<?php

use person as GlobalPerson;

class person{
    private $name;
    public function __construct($n="no name")
    {
        $this->name = $n;
    }
    protected function show(){
        echo $this->name;
    }
}
class teachers extends person{
    function info(){
        echo "teacher name is : " . $this->name;
    }
  
}
// $obj = new person("farman");
// $obj = new person();
$obj2 = new teachers("asif");
$obj2->name= "farukh";
// $obj->name="farman";
$obj2->info();

?>
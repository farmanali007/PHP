<?php

use myclass as GlobalMyclass;

abstract class myclass{
    public $name;
    // function show(){
    //     return $this->name;
    // }

    abstract protected function cal($a, $b);
}
class ChildClass extends myclass{
    public function cal($c, $d){
        return  $c + $d;
    }
    
}
$obj = new ChildClass();
echo $obj->cal(40,30);
 $obj->name=" farman Ali";
//  echo $obj->show();



?>
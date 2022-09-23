<?php

use students as GlobalStudents;

abstract class students{//abstruct class
    abstract public function sum($a,$b);//abstruct function
}
class math extends students{
    public function sum($a,$b){
        echo $a+$b;
    }
}
$std1 = new math();
$std1->sum(2,4);
?>
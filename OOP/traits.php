<?php

use ParentClass as GlobalParentClass;

trait test{
    function Name(){
        echo "<h1>Farman Ali<h2>";
    }
    function FullName(){
        echo "<h1>Engr. Farman Ali<h2>";
    }
}
trait test2{
    function Roll(){
        echo "<h1>Backen-Engineer<h2>";
    }
    function Company(){
        echo "<h1>Google<h2>";
    }
}
class ParentClass{
    use test, test2;
}
class ChildrenClass extends ParentClass{
}
$obj = new ChildrenClass();
$obj->Name();
$obj->FullName();
$obj->Roll();
$obj->Company();


?>
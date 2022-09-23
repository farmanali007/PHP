<?php
class baseClass{
    public $name = "parent Class";
    function cal($a, $b){
        echo "<h1>This is addition</h1>";
         return $a + $b;
    }

}
class derivedClass extends baseClass{
    public $name = "Child Class";//peropties overriding 
    function cal($a, $b){//function or method overriding
        echo "<h1>This is multipicatoin</h1>";
        return $a * $b;
   }
}
// $obj = new baseClass();
// echo $obj->name . "<br>";
// $obj2 = new derivedClass();
// echo $obj2->name;

$obj = new baseClass();
echo $obj->cal(3,6);
$obj2 = new derivedClass();
echo $obj2->cal(3,6);
?>
<?php
class ParentClass{
 public static $name = "farman";
 public function show(){
   echo static::$name;
   echo self::$name;
 }
}
class ChildClass extends ParentClass{
 public static $name = "Kamran";

}
 
$obj = new ChildClass();
$obj->show();


?>
<?php

use person as GlobalPerson;

class person{
    public static $name = "Engr. Farman Ali";
    public function __construct($n)
    {
        self::$name=$n;
    }
    public static function show(){
        return self::$name;
    } 
}
class childClass extends person{
    public  function info(){
        return self::$name;
    }
}
// $obj = new person();
// echo "Name is " . $obj->show() ;
$obj = new childClass("New Name Engr. Farman Ali Goryah ");
echo "Name is : " . $obj->info() ;
// echo "Name is " . $obj->show() ;

//static members of a class can be accessed withoud creating member of that class
// echo "Name  " . person::$name;
//static members of a class can be accessed withoud creating member of that class
// echo "Name is Mr.  " . person::show();

?>
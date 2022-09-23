<?php
class greeting{
  
    public static function helo(){
        echo "Helo ! Engr. Farman Ali\n";
    }
    public function __construct()
    {
      //  self::helo();//use static method inside the class useing "self key word"
    }
}
class childClass extends greeting{
    public function msg(){
        parent::helo();//access static mehtod from child class
    }
}
class otherclass{
    public static function message(){
        greeting::helo();//access static method from another class
    }
}
//  greeting::helo();//use static method without creating object of class from outsde the calss
// new greeting();

// Static methods can also be called from methods in other classes. To do this, the static method should be public:
// otherclass::message();


// To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.

$std = new childClass();
$std->msg();

?>
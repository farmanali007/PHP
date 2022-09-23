<?php
class students {
    public static $name = "Engr. Farman Ali\n";
    public static function greeting(){
        echo "Welcome MR. ".self::$name;//access static property from method inside the class
    } 
}
// class childclass extends students {
//     public function helo(){
//         // echo "Helo!! ".parent::$name;//access static property from child class
//         // $this->greeting();
//         parent::greeting();//access static method form child class
//     }
// }
// echo students::$name;//access static property withou creating object from outside the class
// $std = new students();
// $std->greeting();
$std = new childclass();
$std->helo();
?>
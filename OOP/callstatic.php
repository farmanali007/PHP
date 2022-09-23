<?php
class student{
    private static function hello($name){
        echo "hello $name!!!!<br>";
    }
    public static function __callStatic($method, $arguments)
    {
       if(method_exists(__class__, $method)){
        call_user_func_array([__class__, $method], $arguments);
       }else{
        echo "calling non existing static method: $method";
       }
    }
}
student::hello("Engr. Farman Ali");
student::hye("Engr. Farman Ali");


?>
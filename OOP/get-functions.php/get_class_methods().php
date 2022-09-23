<?php

use myclass as GlobalMyclass;

class myclass{
   function __consturct(){

    }
    function func1(){

    }
    function func2(){

    }
   private function func3(){

    }
    public function getMethodName(){
        echo "here all method are shown included private methods like \"func3\"";
        $class_method = get_class_methods('myclass');
echo "<pre>";
print_r($class_method);
echo "</pre>";
    }
}

$obj = new myclass();
$obj->getMethodName();

$class_method = get_class_methods('myclass');
echo "here only public methods are shown";
echo "<pre>";
print_r($class_method);
echo "</pre>";


?>
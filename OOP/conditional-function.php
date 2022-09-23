<?php


class myclass{
    public $name;
    public function mymethod(){

    }

}
if(class_exists('myclass')){
    echo "clas exist ";
}else{
    echo "class dose not exist "; 
}


echo "<br>";

interface myinterface{

}

if(interface_exists('myinterface')){
    echo "interface exists";
}else{
    echo "interface not exists";
}


echo "<br>";
$obj = new myclass();
if(method_exists($obj,'mymethod')){
    echo "method exists";
}else{
    echo "method not exists";
}



echo "<br>";
$obj = new myclass();
if(property_exists($obj,'name')){
    echo "property exists";
}else{
    echo "property not exists";
}


echo "<br>";

trait mytrait{

}

if(trait_exists('mytrait')){
    echo "trait exists";
}else{
    echo "trait not exists";
}



echo "<br>";
$obj = new myclass();
if(is_a($obj,'myclass')){
    echo "This object is of class:  myclass";
}else{
    echo "NO, object is not of class : myclass";
}

echo "<br>";

class parentClass{

}
class childClass extends parentClass{
    
}
$obj2 = new ChildClass();
if(is_subclass_of($obj2, 'parentClass')){
    echo "This \$obj2 is a object of subclass of parentClass.";
}else{
    echo "This \$obj2 is NOT a object of subclass of parentClass.";
}


?>
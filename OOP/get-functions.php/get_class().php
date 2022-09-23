<?php
class myclass{
  function name(){
    echo "class Name: ". get_class($this). "<br>";//call get_class method inside the class 
  }
}
$obj = new myclass();
$obj->name();

echo "class name is: " . get_class($obj);//call get_class method outside the class

?>
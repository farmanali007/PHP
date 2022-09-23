<?php
class abc{
       private $name = "Engr. farman ali";
       public function __get($property){
              echo "you are trying to access no existing or private property($property)";
       }
       public function __set($property, $value){
            //   echo "you are trying to access no existing or private property: $property";
            if(property_exists($this, $property)){
                    $this->$property = $value;
                    echo "set value in : $property <br>";
            }else{
                echo "property does not exist : $property";

            }
       }
}
$test = new abc();
$test->name="farman ali";
$test->address="farman ali";


?>
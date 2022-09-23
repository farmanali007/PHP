<?php
class Fruits{

private $name,$color;

public function __construct($name,$color)
{
    $this->name = $name;
    $this->color = $color;
}

public function __destruct()
{
    echo "Fruit name is {$this->name} and color is {$this->color}";
    
}


}


$apple = new Fruits("apple", "red");


?>
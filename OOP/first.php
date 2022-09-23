<?php
class myclass{
    public $a,$b,$c;
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$obj1 = new myclass();
$obj1->a = 23;
$obj1->b = 26;
$obj2 = new myclass();
$obj2->a = 23;
$obj2->b = 26;
// var_dump($obj1);

echo "sum is: " . $obj1->sum() . "\n";
echo "sub is: " . $obj2->sub();




?>
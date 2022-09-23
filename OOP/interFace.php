<?php

interface Parent1 {
    function sum($a, $b);
}
interface Parent2{
    function sub($a, $b);
}
interface Parent3{
    function product($a, $b);
}
class ChildClass implements Parent1, Parent2 {
    function sum($c, $d){
        return $c + $d;
    }
    function sub($c, $d){
        return $c - $d;
    }
    function product($c, $d){
        return $c * $d;
    }

}
$obj1 = new ChildClass();
echo "<h1>This is interface Two's Function</h1>" . $obj1->sum(20,40);
echo "<h1>This is interface one's Function</h1>" . $obj1->sub(20,40);
echo "<h1>This is interface Three's Function</h1>" . $obj1->product(20,40);


?>
<?php
function sum($x,$y){
    return $x + $y;
}
function percentage($per){
    return ($per/200)*100;
}
$a=47;
$b=86;
$c=sum($a,$b);
echo "sum is" . $c . "<br>";
echo percentage($c);
?>
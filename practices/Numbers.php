<?php
function add_five(&$value){
    $value += 5;
}
$num=5;
echo $num. "<br>";
add_five($num);
echo $num. "<br>";
// $x = 534.2;
// $int_cast = (int)$x;
// echo $int_cast;


?>
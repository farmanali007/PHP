<?php
$x=3;//global variabls
$y=4;
function myfunc(){
    global $x,$y;//access global variabels  inside function using keyword "global"
    echo "The sum is". $x+$y."<br>";
}
function myfunc2(){
    $a=4;//local variables
    $b=5;
    echo "The sum is ".$a+$b."<br>";
}
myfunc();
myfunc2();
echo "The sum is". $x+$y."<br>";//directly access global variabels outside functions
echo "The sum is". $a+$b."<br>";// You can not access local variabels outside functions









//=====================================Global Variables in arrays===================================//
$p=3;
$q=8;
function sum(){
    $GLOBALS['m']=$GLOBALS['p']+$GLOBALS['q'];
}
sum();
echo $m."<br>";

//=====================================Statoc Variables in arrays===================================//
function mytest(){
   static $b=0;
    echo $b."<br>";
    $b++;
}
mytest();
mytest();
mytest();
?>
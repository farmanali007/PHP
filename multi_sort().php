<?php
$num=[8,6,4,2,10];
$num2=[9,7,5,3,14];
// $name=["farman","ateeq","imran","zubiar","sajjad","kashif"];
  array_multisort($num,$num2);//error if length  of two passing array are not equal
//use for one or more than one arrays at a time.
echo "<pre>";
print_r($num);
echo "</pre>";
echo "<pre>";
print_r($num2);
echo "</pre>";
?>
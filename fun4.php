<?php
function Name($fname , $lname){
    return $fname.$lname;
}
$func="Name";
echo $func("farman" , " Ali \n");//variable function

////////////////////////////second way to define and calling variable function///////////////////////


   $newMethod = function($a,$b){
       return $a + $b;
   };
     echo  $newMethod(3.4,32);
?>
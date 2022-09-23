<?php
  $num=[3,4,5,6,7,5];
  $num2=[31,41,23,34,32,34];
  function sum($n,$n2){
      return $n+$n2;
  }
    $newArray= array_map('sum',$num,$num2);//sum is name of function which we define after or before
    foreach($newArray as $a){
        echo $a," ";
    }


?>
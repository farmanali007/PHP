<?php
  $num=[3,4,5,6,7,5];
  function tables($n,$n2){
      return $n .'='. $n2;
  }
    $newArray= array_reduce($num,'tables',1);//sum is name of function which we define after or before
    foreach($newArray as $a){
        echo $a," ";
    }


?>
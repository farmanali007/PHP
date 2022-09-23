<?php
     $array= ["farman","ali","sajjad","kashif"];
     $NewArray= ["iqra","tahira","humera","sumera"];
     $a = array_combine($array,$NewArray);
     echo "<pre>";
     print_r($a);
     echo "</pre>";
     echo "<br>";
     $c = array_merge($array,$NewArray);
     echo "<pre>";
     print_r($c);
     echo "</pre>";
?>
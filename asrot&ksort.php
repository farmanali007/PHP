<?php
 $a=[
     'y'=>"farman",
     'a'=>"haider",
     'f'=>"ateeq",
     'r'=>"sajjad"
 ];
 ////////sorting values of assosiative array
 asort($a);
 echo "<pre>";
 print_r($a);
 echo "</pre><br>";

//////////sorting by keys of an assosiative array

 ksort($a);
 echo "<pre>";
 print_r($a);
 echo "</pre>";


//////////sorting by keys(reverse) of an assosiative array

 krsort($a);
 echo "<pre>";
 print_r($a);
 echo "</pre>";


?>
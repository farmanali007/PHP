<?php
   $array=["farman","haider","ali","university","sofware Engr."];

   echo "<pre>";
   print_r($array);
   echo "</pre>\n";


    array_shift($array);// array_shift() method delete the first value of array
    echo "<pre>";
    print_r($array);
    echo "</pre>";


    array_unshift($array,"Layyah",53);// array_push method add value in the starting of an array
    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>
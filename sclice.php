<?php
      $array = ["farman","sajjad","kashif","ali","haider"];
      $NewArray = array_slice($array,2,4,true);//by usign true as 4th argument,give us orignal indexing of Newarray instead of '0' indexing as bydefault
       echo "<pre>";
       print_r($NewArray);
       echo "</pre><br>";


       $array2 = ['a'=>"farman",
       'b'=>"sajjad",
       'c'=>"kashif",
       'd'=>"ali",
       'e'=>"haider"
    ];
    $NewArray2 = array_slice($array2,2,4);
    echo "<pre>";
    print_r($NewArray2);
    echo "</pre><br>";

    $NewArray3 = array_slice($array2,-4,3);
    echo "<pre>";
    print_r($NewArray3);
    echo "</pre><br>";

?>
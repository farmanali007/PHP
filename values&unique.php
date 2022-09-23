<?php
    $array = ['a'=>"farman",'b'=>"haider",'c'=>"ali",'d'=>"asad",'e'=>"ateeq",'f'=>"farman"];
    $newArray = array_values($array);//gives all values of an array repeated values are included
    echo "<pre>";
    print_r($newArray);
    echo "</pre><br>";

    $newArray = array_unique($array);//gives all values of an array repeated values are not included
    echo "<pre>";
    print_r($newArray);
    echo "</pre><br>";
 

?>
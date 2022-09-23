<?php
///////////////implode function is used to convert array into string..////////////
 $a=["farman","ali","jutt","goraya"];
 $newArray=implode(",",$a);//implode(seprator,arrayName)seprator which you want to use in string.
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
 $a=["farman","ali","jutt","goraya"];
 $newArray=implode(" ",$a);//implode(seprator,arrayName)seprator which you want to use in string.
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
?>
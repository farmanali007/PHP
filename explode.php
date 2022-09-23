<?php
     /////////explode function is used to convert string into an array//////////


     $a="my name is farman ali jutt";//sting
     $newArray=explode(" ",$a);//explode(seprator,stringName,limit=>optional)
     echo "<pre>";
     print_r($newArray);
     echo "<pre>";

     $a="my name is farman ali jutt";//sting
     $newArray=explode(" ",$a,2);//explode(seprator,stringName,limit=>optional)
     echo "<pre>";
     print_r($newArray);
     echo "<pre>";
?>
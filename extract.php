<?php
  $array=['a'=>"farman",'b'=>"virtual", 'c'=>"university", 'd'=>"software"];
    extract($array);//extraact() function is used to convert the keys of an assosiative array into variables...///
    echo "value of a is : $a <br>";
    echo "value of a is : $b <br>";
    echo "value of a is : $c <br>";
    echo "value of a is : $d <br><br><br>";




    $array=['a'=>"farman",'b'=>"virtual", 'c'=>"university", 'd'=>"software"];
    extract($array);//extraact() function is used to convert the keys of an assosiative array into variables...///
    $a="jani";//re-assign value of Variable $a 
    echo "value of a is : $a  //note the change//<br>";
    echo "value of a is : $b <br>";
    echo "value of a is : $c <br>";
    echo "value of a is : $d <br><br><br><br>";


    
    $a="jani";
    $array=['a'=>"farman",'b'=>"virtual", 'c'=>"university", 'd'=>"software"];
    extract($array);//if same variable already exist in our program than extract function rewrite the value of that variable and print the value which is in an array...
    echo "value of a is : $a  //re-write the value of a variable//<br>";
    echo "value of a is : $b <br>";
    echo "value of a is : $c <br>";
    echo "value of a is : $d <br><br><br>";

       $a="jani";
    $array=['a'=>"farman",'b'=>"virtual", 'c'=>"university", 'd'=>"software"];
    extract($array,EXTR_SKIP);//by using EXTRACT_SKIP we can wirte orignal value of $a variable and the skip the value of an array...///
    echo "value of a is : $a <br>";
    echo "value of a is : $b <br>";
    echo "value of a is : $c <br>";
    echo "value of a is : $d <br><br><br>";



       $a="jani";
    $array=['a'=>"farman",'b'=>"virtual", 'c'=>"university", 'd'=>"software"];
    extract($array,EXTR_PREFIX_SAME,"test");
    echo "value of a is : $test_a <br>";
    echo "value of a is : $b <br>";
    echo "value of a is : $c <br>";
    echo "value of a is : $d <br><br><br>";

?>
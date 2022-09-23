<?php
   $marks =[
       [
           "physics"=> 67,
           "Introduction to Computer"=>78,
           "Data Communication"=>90,
           "Intro to Programming"=>100
       ],
       [
           "physics"=> 62,
           "Introduction to Computer"=>38,
           "Data Communication"=>40,
           "Intro to Programming"=>56
       ],
       [
           "physics"=> 87,
           "Introduction to Computer"=>88,
           "Data Communication"=>80,
           "Intro to Programming"=>50
       ],
       [
           "physics"=> 65,
           "Introduction to Computer"=>79,
           "Data Communication"=>80,
           "Intro to Programming"=>60
       ]
   ];
   $newArray = array_column($marks,"physics");
   echo "<pre>";
   print_r($newArray);
   echo "</pre><br>";
   

   $marks2=[
       "pak.study"=>69,
       "islamiat"=>62,
       "computer"=>86,
       "programming"=>67,
       "data_science"=>67
   ];
   $newArray2 = array_chunk($marks2,2);//array_chunk function used for pairing of array elements
   echo "<pre>";
   print_r($newArray2);
   echo "</pre>";

      
?>
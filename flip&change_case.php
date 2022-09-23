<?php
  $array=[
      'farman'=>34,
      'ASAD'=>43,
      'Haider'=>42,
      'ali'=>65,
      'sajjad'=>63,
      '54'=> "kashif"
  ];
     ///////Array_flip function change the keys into values and values into keys
     $a= array_flip($array);
     echo "<pre>";
     print_r($a);
     echo "</pre><br>";
     //////////////////Array_change_key_case Function change the keys case(uper to lowe and lower to upper)
     $b= array_change_key_case($array,CASE_UPPER);
     echo "<pre>";
     print_r($b);
     echo "</pre>";

?>
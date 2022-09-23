<?php
  $s=23;//global variable
  function test(){
      global $s;//by using global key word we can use global variable inside the functions
      $name = "engr.Farman Ali goraya \n";// local variable only use within the functions where its declear and define.
      echo $name;
      echo "variable inside the function : $s";
  }
  test();
  echo "\nvariable outside the function : $s";
  echo $name;//we can not use local variable outside the functions
?>
<?php
  $name=array("farman","ali","asad","ateeq","sajjad");

   echo "<b>Current : </b> " . current($name) . "<br>";
   echo "<b>key : </b> " . key($name) . "<br>";
   echo "<b>pos : </b> " . pos($name) . "<br>";
   
   
   next($name);
   echo "<b>next : </b> " . current($name) . "<br>";

   next($name);
   echo "<b>next : </b> " . current($name) . "<br>";


   prev($name); 
   echo "<b>previous : </b> " . current($name) . "<br>";

?>
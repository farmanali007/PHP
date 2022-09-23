<?php
   $name=["farman2","farman34","farman65","farman23","farman31"];
   natsort($name);///sorting a string including numeric value
   echo "<pre>";
   print_r($name);
   echo "</pre>";



   $name=["Farman2","farman34","farman65","farman23","Farman31"];
   natcasesort($name);///sorting a string including numeric value
   echo "<pre>";
   print_r($name);
   echo "</pre>";
?>
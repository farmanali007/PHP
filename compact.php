<?php
       //////////compact function///////////

       $name="farman";
       $age=23;
       $roll="software Engr.";
       $newArray=compact("name","age","roll");//compact function is used to make an array of variables.
       echo "<pre>";
       print_r($newArray);
       echo "</pre>";

?>
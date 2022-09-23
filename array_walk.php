<?php
     $Name=array(
         'a'=>"farman",
         'b'=>"Imran",
         'c'=>"Hiader",
         'd'=>"Ubaid",
         'e'=>"sajjad"
     );
        array_walk($Name,"MyFunction"," is a key of ");
        function MyFunction($value,$key,$param){
            echo $key,$param,$value . "<br>"; 
        }
?>
<?php
  $country=['1'=>"pakistan",'2'=>"India",'3'=>"USA"];
     $Name=array(
         $country,///is is also multidimensional recursive array with anoter format
         'a'=>"farman",
         'b'=>"Imran",
         'c'=>"Hiader",
         'd'=>"Ubaid",
         'e'=>"sajjad"
     );
        array_walk_recursive($Name,"MyFunction"," is a key of ");
        function MyFunction($value,$key,$param){
            echo $key,$param,$value . "<br>"; 
        }
?>
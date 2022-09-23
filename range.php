<?php
       //////////Range function///////////
             //range(start,end,step=>optional)
   $newArray=range(1,200,3);//third argument is optional by default its value is 1.
       foreach($newArray as $a){
           echo $a . " ";
       }
       ////////range function for characters //////////////////////////   
       echo "<br>";
       $newArray2=range('a','m');
       foreach($newArray2 as $b){
           echo $b. " ";
       }
?>
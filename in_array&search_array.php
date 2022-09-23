<?php
   $food=["orange","banana","mango","Apple","orange","grapes","orange","banana","stobery"];
   echo in_array('stobery',$food),"\n";//in_array function return 1 or 0 
   echo array_search("stobery",$food);// array_search function return us key or index no of that particular string which we pass 

?>
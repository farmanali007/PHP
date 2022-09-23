<?php
   $string="hey! my name 'engr. farman ali goryah'";
   echo addslashes($string)."<br>";//adds-slashes
   echo stripslashes($string)<"<br>";//remove-slashed



   echo addcslashes($string,"m")."<br>";//adds-slashes where m is in the string
   echo stripcslashes($string);//remove-slashed

?>

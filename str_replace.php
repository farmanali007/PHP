<?php
 $string="Engr farman ali goryya virtual university of pakistan lahore is best city for virtual education in pakistan";
 $newString=str_replace('virtual',"NUST",$string);//case-sensitive function
 echo $newString."<br>";
 $newString2=str_ireplace('VIRTUAL',"NUST",$string);//case-insensitive function
 echo $newString2;

?>
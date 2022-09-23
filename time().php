<?php
//////////date() function is use to show current time 
 echo "Time is : " . date("h:i:s:a");
 echo "<br>";
 echo "Time is : " . date("h:i:s:A");



 ////////past time //////////
 echo "<br>";

 echo date("l",mktime(0,0,0,10,20,1997));//mktime(h,m,s,month,day,year)//yh function hmyn bta rha ha k 10 oct 1997 ko week ka konsa wala din tha..amazing bro...


 //////////////Future time and Date/////////
echo "<br>";
 $date = date_create("2025-10-20");
 echo date_format($date,"d-M-Y,l");
 

?>
<?php
   $string="Vu###1503";
    echo "Passoword is : $string<br>";
    echo "encoryped form is : ". md5($string)."<br>";//hexaalfa form
    echo "encoryped form is : ". md5($string,true)."<br>";//binary formate 



/////////////////sha1 is another passowrd encoryped passowerd algorithem and widely use and more secure////////////
   $string="Vu###1503";
    echo "Passoword is : $string<br>";
    echo "encoryped form is : ". sha1($string)."<br>";//hexaalfa form
    echo "encoryped form is : ". sha1($string,true);//binary formate 

?>
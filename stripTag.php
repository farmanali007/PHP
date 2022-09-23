<?php
       $string="farman <b> ali </b> jutt <i> goryah </i>";
       echo strip_tags($string,"<b>")."<br>";
       $string2="farmanaligorayah";
       echo wordwrap($string2,4,"<br>",true);


       
?>
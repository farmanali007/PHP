<?php
$age=25;
switch(1):
    case ($age>=18 && $age<=30):
         echo "<h1>you are elligible</h1>";
         break;
    case ($age<18 && $age>=10):
         echo "try again";
         break;
    case($age>1 && $age<10):
         echo "you are not elligible";
         break;
         default:
         echo "not valid age";
    endswitch;
?>
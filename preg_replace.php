<?php
$string = "Engr. Farman Ali Gorayah Software Engineer And Backend developer Php Laravel developer";
$pattern = "/developer/i";
$replacment = "dev";
echo preg_replace($pattern, $replacment, $string);


 ?>

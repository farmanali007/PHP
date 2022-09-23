<?php
$string = "Engr. Farman Ali Jutt Engr. Farman Ali Jutt Engr. Farman Ali Jutt ";
echo $string;
echo "<br>";
$ptrn = "/FARMAN/i";
echo preg_match($ptrn, $string);
echo "<br>";
echo preg_match_all($ptrn, $string);
echo "<br>";
echo preg_replace($ptrn,"farman", $string);

?>
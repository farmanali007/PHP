<?php

// echo readfile("intro.txt");
// $myfile =  fopen("intro.txt","r") or die("unable to open this file");
// echo fread($myfile, filesize("intro.txt"));
// fclose($myfile);


$myfile = fopen("newfile.txt","a+") or die("unable to open this file");
$txt = "Engr. Farman Ali Jutt ";
echo fwrite($myfile, $txt);
echo readfile("newfile.txt");
fclose($myfile);
?>
<?php

 spl_autoload_register(function ($className){
        require "classes/". $className . ".php";
 });


$person = new lahore();
$person2 = new karachi();

?>
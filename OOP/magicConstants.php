<?php

use myclass as GlobalMyclass;

echo "line No: ". __LINE__ . "<br>" ;//return line no of code

echo "file path: " . __FILE__ . "<br>";//return absolute file path 
echo "dir path: " . __DIR__ . "<br>";//return paretn directory name of file 

function MYfunction(){
    echo "the function name: ". __FUNCTION__. "<br>";
}

MYfunction();


class myclass{
    public function getClassName(){
        return __CLASS__;
    }
}
$obj = new myclass();
echo $obj->getClassName();
?>
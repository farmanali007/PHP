<?php
for($a=1;$a<=99;$a=$a+10){
    for($b=$a; $b<$a+10;$b++){
        if($b>1 && $b<=10){
            echo " ";
        }
        echo $b. " ";
    }
    echo "\n";
}
?>

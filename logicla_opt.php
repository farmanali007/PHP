<?php
$a=50;
$b=0;
$sum=$a + $b;
if($sum<50){
    echo "you are pass";
}elseif($sum>50){
    echo "you are first ";
}else{
    echo "you are fail ";
}
///////////// 2nd way to write the Elseif Statement///////////////////
echo "\n<br>";
$x=50;
$y=40;
$z=$x + $y;
if($z<50):
    echo "you are pass";
elseif($z>50):
    echo "you are first ";
else:
    echo "you are fail ";
endif;
?>
<?php
$a =0;
function factorial($x){
    if($x==0){
        return 1;
    }
    $s = $x * factorial($x-1);
    return $s;
}
   echo factorial($a);
?>
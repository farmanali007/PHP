<?php

$array = [
    "physics"=>54,
    "chemistry"=>53,
    "math" =>65,
    "urdu" =>52
];
  
$a = array_keys($array);//this function return all keys of array in the form of new array
echo "<pre>";
print_r($a);
echo "</pre><br>";
$b = array_key_exists("urdu",$array);//this function return '1' or '0'
if($b){
    echo "key exist";
}else{
    echo "key not exist";
} 
?>

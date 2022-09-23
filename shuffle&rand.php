<?php
    $name=["farman","asad","ateeq","haider","sajjad","kashif" 
];
       $a= array_rand($name,3);//it return the index of rand values which store in $a array
foreach($a as $b){
    echo $name[$b]. " ";
}
        echo "<br>";
       shuffle($name);
       foreach($name as $c){
        echo $c . " ";
    }

       
?>
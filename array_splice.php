<?php
        $array = ["farman","sajjad","kashif","haider"];
        $array2 = ["Engr.farman","ateeq"];
        array_splice($array,1,2,$array2);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
?>

<?php
        $a=["red","pink","yellow","green","blue"];
        $b=["banana","mango","stobery"];
        $x=["carot","pea"];
        $c= array_replace($a,$b,$x);
        echo "<pre>";
        print_r($c);
        echo "</pre>";





         $marks=[
             "physics" => 34,
             "chemistry" =>54,
             "bio" => 57,
             "math" => 65
         ];

         echo "<pre>";
         print_r($marks);
         echo "</pre>";
 
         $Newmarks=[
             "physics" => 76,
             "chemistry" =>44,
             "bio" => 53,
             "math" => 65
         ];

        $z= array_replace($marks,$Newmarks);
        echo "<pre>";
        print_r($z);
        echo "</pre>";





?>
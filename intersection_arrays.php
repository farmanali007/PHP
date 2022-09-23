<?php
      $array1= ["a"=>"farman",
      "b"=> "haider",
      "c"=> "imran",
      "d"=> "kashif",
      "e"=> "sajjad"
];
      $array2= ["a"=>"farman",
      "3"=> "jasim",
      "c"=> "kamran",
      "2"=> "asad",
      "6"=> "sajjad"
];
$Newarray1 = array_intersect($array1,$array2);//return an array of common values
echo "<pre>";
print_r($Newarray1);
echo "</pre><br>";


$Newarray2 = array_intersect_key($array1,$array2);//return an array of common keys

echo "<pre>";
print_r($Newarray2);
echo "</pre><br>";

$Newarray3 = array_intersect_assoc($array1,$array2);//return an array of common keys and common values

echo "<pre>";
print_r($Newarray3);
echo "</pre>";
?>
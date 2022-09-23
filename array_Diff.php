<?php
      $array1= ["a"=>"farman",
      "b"=> "haider",
      "c"=> "imran",
      "d"=> "kashif",
      "e"=> "sajjad",
      "f"=>"virtual"
];
      $array2= ["a"=>"farman",
      "3"=> "jasim",
      "c"=> "kamran",
      "2"=> "asad",
      "6"=> "sajjad",
      "f"=>"virtual"
];
$Newarray1 = array_diff($array1,$array2);//return an array of diff values
echo "<pre>";
print_r($Newarray1);
echo "</pre><br>";


$Newarray2 = array_diff_key($array1,$array2);//return an array of common keys

echo "<pre>";
print_r($Newarray2);
echo "</pre><br>";

$Newarray3 = array_diff_assoc($array1,$array2);//return an array of common keys and common values

echo "<pre>";
print_r($Newarray3);
echo "</pre>";
?>
<?php
$arr = [
  "stname" => "<h1>Engr. Farman Ali</h1>",
  "stmarks" => 34,
  "stemail" => "farf manali15//88594@gmail.com"
];

 $filter= array(
   "stname" => array(
    "filter"  => FILTER_SANITIZE_STRING,
     "flags" => FILTER_FLAG_STRIP_HIGH
   ),

   "stmarks" => array(
     "filter" => FILTER_VALIDATE_INT,
     "options" => array(
       "min_range" => 1,
       "max_range" => 100
     )
   ),
   "stemail" => FILTER_SANITIZE_EMAIL
 );

 echo "<pre>";
print_r(filter_var_array($arr, $filter));
echo "</pre>";
 ?>

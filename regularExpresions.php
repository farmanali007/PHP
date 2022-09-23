<?php
$string = "Engr. Farman ali gorayah PHP Laravel Develpor and Backend Engineer. I am a software Engr. and PHP Laravel developer";
// $exp = preg_match("/php/i", $string);
 $exp = preg_match_all("/php| Laravel/i", $string, $array);

if($exp){
  echo "match  found";
}else{
  echo "match not found";
}
echo "<pre>";
print_r($array);
echo "</pre>";







 // preg_filter()	Returns a string or an array with pattern matches replaced, but only if matches were found
 // preg_grep()	Returns an array consisting only of elements from the input array which matched the pattern
 // preg_last_error()	Returns an error code indicating the reason that the most recent regular expression call failed
 // preg_match()	Finds the first match of a pattern in a string
 // preg_match_all()	Finds all matches of a pattern in a string
 // preg_replace()	Returns a string where matches of a pattern (or an array of patterns) are replaced with a substring (or an array of substrings) in a given string
 // preg_replace_callback()	Given an expression and a callback, returns a string where all matches of the expression are replaced with the substring returned by the callback
 // preg_replace_callback_array()	Given an array associating expressions with callbacks, returns a string where all matches of each expression are replaced with the substring returned by the callback
 // preg_split()	Breaks a string into an array using matches of a regular expression as separators
 // preg_quote()	Escapes characters that have a special meaning in regular expressions by putting a backslash in front of them
 //

 ?>

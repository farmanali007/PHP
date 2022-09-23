<?php
      $str1="hello";
      $str2="hello";
           //strcmp(string1,string2);
      echo strcmp($str1,$str2)."<br>";//case sensitive function// it return '0' if each chrecter of str1 is equal to str2

               //strcasecmp($string1,string2);
      echo strcmp($str1,$str2)."<br>";//case in-sensitive function// it return '0' if each chrecter of str1 is equal to str2


           //strncmp(string1,string2,length);
      echo strncmp($str1,$str2,3)."<br>";//case sensitive function// it return '0' if each chrecter of str1 is equal to str2

               //strncasecmp($string1,string2,length);
      echo strncasecmp($str1,$str2,3)."<br>";//case in-sensitive function// it return '0' if each chrecter of str1 is equal to str2

?>
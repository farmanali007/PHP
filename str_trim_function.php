<?php
      $string=".farman ali goryah.";
      echo trim($string,'.')."<br>";//delete the charecter from both start and end

      $string=".farman ali goryah.";
      echo rtrim($string,'.')."<br>";//delete the charecter from right side of the string
      $string=".farman ali goryah.";
      echo chop($string,'.')."<br>";//rtrim() and chop() are same function//replace the chrecter from the right side of string


      $string=".farman ali goryah.";
      echo ltrim($string,'.'). " <br>";//delete the charecter from left side of the string


?>
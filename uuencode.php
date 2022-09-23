<?php
  $msg="my name is farman ali jutt how are you mr. jameel? do you  know me ";
        echo "<b>orignal msg is:</b>  $msg<br>";
   $encoryped_msg= convert_uuencode($msg);
   echo "<b>encoryped msg is:</b>  $encoryped_msg"."<br>";
   $encoryped_msg_decode=convert_uudecode($encoryped_msg);
   echo "<b>encoryped msg decode :</b> $encoryped_msg_decode"."<br>";
      

?>
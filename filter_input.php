<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form class="" action="<?php echo $_SERVER ["PHP_SELF"]; ?>" method="post">
    Email: <input type="email" name="email" value="">
    <input type="submit" name="submit" value="Submit">

  </form>
  <?php
  if(isset($_REQUEST['submit'])){
    echo "<pre>";
      print_r(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL));
   echo "</pre>";
    }

   ?>
</body>

</html>

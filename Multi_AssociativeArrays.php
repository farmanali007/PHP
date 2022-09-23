<?php
   $marks =[
       "Farman Ali"=>[
           "physics"=> 67,
           "Introduction to Computer"=>78,
           "Data Communication"=>90,
           "Intro to Programming"=>100
       ],
       "Abu bakar"=>[
           "physics"=> 62,
           "Introduction to Computer"=>38,
           "Data Communication"=>40,
           "Intro to Programming"=>56
       ],
       "Umair Akram"=>[
           "physics"=> 87,
           "Introduction to Computer"=>88,
           "Data Communication"=>80,
           "Intro to Programming"=>50
       ],
       "Ubaid Iftakhar"=>[
           "physics"=> 65,
           "Introduction to Computer"=>79,
           "Data Communication"=>80,
           "Intro to Programming"=>60
       ]
   ];
   $sum=0;
         echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
         echo "<tr>";
         echo "<th>Student Name</th>";
         echo "<th>Physics</th>";
         echo "<th>Intro to Computer</th>";
         echo "<th>Data Communication</th>";
         echo "<th>Intro to Programming</th>";
         echo "<th>Obtaind Marks/400</th>";
         echo "<th>Percentage(%)</th>";
         echo "</tr>";
      foreach($marks as $key=>$v1){
          global $sum;
          $sum =0;
          echo "<tr><td>".$key."</td>";
          foreach($v1 as $v2){
              global $sum;
              $sum=$sum+$v2;
              echo "<td>".$v2."</td>";
      }
      echo "<td>". $sum. "</td>";
      echo "<td>". ($sum/400) * 100 . "%</td>";
      echo "</tr>";
    }
    echo "</table>";

   echo "<pre>";
   print_r($marks);
   echo "</pre>";
?>
<?php
     $emp= [
         [1,"Engr.Farman Ali","Sofware Engr.",50000],
         [2,"Mr.Zeshan faroqi","Web Desinger",34000],
         [3,"Mr.Umar Ameen","Researcher",54300],
         [5,"imran","web Developer",45000],
         [6,"ifran","ethical hacker",45000],
         [7,"jameel"," IT Specialist",45000],
     ];
     echo " 1st Method<br><br>";


           echo "<table  border = '2px' cellpadding = '5px'>";
           echo "<tr>";
           echo "<th>Employee Id</th>";
           echo "<th>Employee Name</th>";
           echo "<th>Employee Roll</th>";
           echo "<th>Employee Sallary</th>";
           echo "</tr>";

           foreach($emp as $v1){
               echo "<tr>";
               foreach($v1 as $v2){
                   echo "<td>".$v2."</td>";
               }
               echo "<tr>";
           }
           echo "</table>";











           echo " <br><br>2nd Method<br><br>";
       for($i=0;$i<5;$i++){
           for($j=0;$j<4;$j++){
               echo $emp[$i][$j]." ";
           }
           echo "<br>";
       }




       echo "<br><br> 3Rd Method<br><br>";
               
       foreach($emp as list($id,$name,$roll,$sallary)){
           echo "$id $name $roll $sallary<br>";
       }



       echo "<br><br> 4th Method<br><br>";
       
     echo "<pre>";
     print_r($emp);
     echo "</pre>";
?>
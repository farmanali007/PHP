<?php
     $emp= [
        [1,"Engr.Farman Ali","Sofware Engr.",50000],
        [2,"Mr.Zeshan faroqi","Web Desinger",34000],
        [3,"Mr.Umar Ameen","Researcher",54300],
        [5,"imran","web Developer",45000],
        [6,"ifran","ethical hacker",45000],
        [7,"jameel"," IT Specialist",45000],
    ];
       echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
       echo "<tr>";
       echo "<th>Id</th>";
       echo "<th>Name</th>";
       echo "<th>Roll</th>";
       echo "<th>sallary</th>";
       echo "</tr>";
    foreach($emp as list($id,$name,$roll,$sallary)){
        echo "<tr><td>$id</td> <td>$name</td> <td>$roll</td> <td>$sallary</td></tr>";
    }
    echo "</table>";
?>
<?php
    $conn = mysqli_connect("localhost", "root", "", "students") or die("connection fail");
    $sql = "SELECT*  FROM employee WHERE id > 5";
    $result = mysqli_query($conn, $sql) or die("query fail");
   
     $arows = mysqli_affected_rows($conn);
     echo "Affected Rows: ".$arows;
?>
<?php
    // $conn = mysqli_connect("localhost", "root", "", "studentss") or die( "Connection fail ". mysqli_connect_error());
    $conn = mysqli_connect("localhost", "root", "", "students") or die( "Connection fail ". mysqli_connect_errno());
    $sql = "SELECT*  FROM employee2 WHERE id > 5";
    // $result = mysqli_query($conn, $sql) or die("query fail : " . mysqli_errno($conn));
    // $result = mysqli_query($conn, $sql) or die("query fail : " . mysqli_error($conn));
    $result = mysqli_query($conn, $sql);
    echo "<pre>";
   print_r(mysqli_error_list($conn));
   echo "</pre>";
   die();
   
     $arows = mysqli_affected_rows($conn);
     echo "Affected Rows: ".$arows;
?>
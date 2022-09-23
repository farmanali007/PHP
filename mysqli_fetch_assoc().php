<?php
    $conn = mysqli_connect("localhost", "root", "", "students") or die("connection fail");
    $sql = "SELECT* FROM city";
    $result = mysqli_query($conn, $sql) or die("query fail");
    $row = mysqli_fetch_assoc($result);//gives us assosiative  array 
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    // while($row = mysqli_fetch_assoc($result)){
    //    echo $row['cname']. "<br>";
    // }

?>
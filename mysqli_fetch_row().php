<?php
    $conn = mysqli_connect("localhost", "root", "", "students") or die("connection fail");
    $sql = "SELECT* FROM city";
    $result = mysqli_query($conn, $sql) or die("query fail");
    $row = mysqli_fetch_row($result);//gives us index array 
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    // while($row = mysqli_fetch_row($result)){
    //    echo $row['cname']. "<br>";
    // }

?>
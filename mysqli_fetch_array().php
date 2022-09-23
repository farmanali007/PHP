<?php
    $conn = mysqli_connect("localhost", "root", "", "students") or die("connection fail");
    $sql = "SELECT* FROM employee";
    $result = mysqli_query($conn, $sql) or die("query fail");
    //$row = mysqli_fetch_array($result);//By default gives us both index and assosiative array
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);//By  gives us  assosiative array
    $row = mysqli_fetch_array($result, MYSQLI_NUM);//By  gives us  index array
    echo "<pre>";
    print_r($row);
    echo "</pre>";
    // while($row = mysqli_fetch_assoc($result)){
    //    echo $row['cname']. "<br>";
    // }

?>
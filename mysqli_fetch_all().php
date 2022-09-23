<?php
    $conn = mysqli_connect("localhost", "root", "", "students") or die("connection fail");
    $sql = "SELECT* FROM employee";
    $result = mysqli_query($conn, $sql) or die("query fail");
    //$row = mysqli_fetch_array($result);//By default gives us both index and assosiative array
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);//By  gives us  assosiative array
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);//By  gives us  multi-dimensional assosiative array
    // $row = mysqli_fetch_all($result, MYSQLI_NUM);//By  gives us  multi-dimensional index array
    // $row = mysqli_fetch_all($result);//By  default gives us  multi-dimensional index array
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
    foreach($row as $data){
         echo $data['id'] . $data['name'] .$data['Roll'] .$data['sallary'] .$data['city'] . "<br>";
    }

?>
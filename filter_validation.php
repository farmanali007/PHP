<?php
$var = 23;
var_dump(filter_var($var, FILTER_VALIDATE_INT));
$opstions = array(
              "optoins" => array(
                "min_range" => 23, 
                "max_range" => 45
              )
);
if(filter_var($var, FILTER_VALIDATE_INT, $opstions)){
    echo $var. "<br>valid age ";
}else{
    echo $var. "<br>is not valid age ";
}

echo "<br>";
//Email Validation
$var = "farmanali007@gmail.com";
if(filter_var($var, FILTER_VALIDATE_EMAIL)){
    echo $var. "<br>valid Email ";
}else{
    echo $var. "<br>is not valid Email ";
}
echo "<br>";
//URL validation
$var = "https://farmanali.com";
if(filter_var($var, FILTER_VALIDATE_URL)){
    echo $var. "<br>valid URL ";
}else{
    echo $var. "<br>is not valid URL ";
}
echo "<br>";
//URL validation///path required
$var = "https://farmanali.com/test/test.php";
if(filter_var($var, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
    echo $var. "<br>valid URL ";
}else{
    echo $var. "<br>is not valid URL ";
}
echo "<br>";
//URL validation///query required
$var = "https://farmanali.com/test/test.php?a=1";
if(filter_var($var, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
    echo $var. "<br>valid URL ";
}else{
    echo $var. "<br>is not valid URL ";
}

?>
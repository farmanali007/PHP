<?php
$var = "fa(rman. ali0//07@gmail.com";
$var = filter_var($var, FILTER_SANITIZE_EMAIL);//this function is use to eliminate the mistake by users and make a correct email address

if(filter_var($var, FILTER_VALIDATE_EMAIL)){
    echo $var. "<br>valid Email ";
}else{
    echo $var. "<br>is not valid Email ";
}



//////////////sanitize an integer value ////////
echo "<br>";
$var = "$%#$344*&*fadf";
$var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);//this function is use to eliminate the mistake by users and make a correct integer

if(filter_var($var, FILTER_VALIDATE_INT)){
    echo $var. "<br>valid AGE ";
}else{
    echo $var. "<br>is not valid AGE ";
}

//////////////sanitize an float value ////////
echo "<br>";
$var = "12.34";
$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);//this function is use to eliminate the mistake by users and make a correct float number

if(filter_var($var, FILTER_VALIDATE_FLOAT)){
    echo $var. "<br>valid float ";
}else{
    echo $var. "<br>is not valid float ";
}


//////////////sanitize an float value ////////
echo "<br>";
$var = "10E";
$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC);//this function is use to eliminate the mistake by users and make a correct float number

if(filter_var($var, FILTER_VALIDATE_FLOAT)){
    echo $var. "<br>valid float ";
}else{
    echo $var. "<br>is not valid float ";
}

//////////////sanitize an float value ////////
echo "<br>";
$var = "3,45,000";
$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);//this function is use to eliminate the mistake by users and make a correct float number

if(filter_var($var, FILTER_VALIDATE_FLOAT)){
    echo $var. "<br>valid float ";
}else{
    echo $var. "<br>is not valid float ";
}
?>

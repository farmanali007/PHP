<?php
class abc{
    public function __construct()
    {
        echo "THis is construct method<br>";
    }
    public function hello(){
        echo "hello mr. Farman ali<br>";
    }
    public function __destruct()
    {
        echo "this si distruct function<br>";   
    }
}
$person = new abc();
$person->hello();

?>
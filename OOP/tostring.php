<?php
class myclass{
    public function __toString()
    {
        return "you can not print class object as a string: " . get_class($this);
    }
}
$test = new myclass();
echo $test;

?>
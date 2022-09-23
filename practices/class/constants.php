<?php
class students{
    const LEAVING_MASSAGE = "Good bye Mr. Farman Ali Goryah!!";
    public function bye(){
        echo self::LEAVING_MASSAGE;
    }
}

$student1 = new students();
$student1->bye();
echo "\n";
echo students::LEAVING_MASSAGE;



?>
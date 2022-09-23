<?php
trait message1{
    public function msg1(){
        echo "Engr. Farman Ali\n";
    }
}
trait message2{
    public function msg2(){
        echo "virtual university of pakistan\n";
    }
}
class welcome{
    use message1;
}
class welcome2{
    use message1,message2;
}
$std1=new welcome();
$std1->msg1();

$std = new welcome2();
$std->msg1();
$std->msg2();



?>
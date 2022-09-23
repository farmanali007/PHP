<?php 
// $x=5;
// $y=5.4;
// $text="Engr. Farman Ali";
// $cars = array("suzuki", "farari", "jagwar");
// var_dump($x);
// var_dump($y);
// var_dump($text);
// var_dump($cars);


//===============================Object Data Types==================//

class Mycar{
     public $color; 
     public $model;
     public function __construct($color , $model)
     {
        $this->color = $color;
        $this->model = $model;
     }
     public function message(){
        echo "My is " . $this->color ." ". $this->model ;
     }
}

$car1 = new Mycar("black", "farari");
$car1->message();
echo "<br>";
$car2 = new Mycar ("yellow", "suzuki");
$car2->message();
echo "<br>";
var_dump($car1);
?>
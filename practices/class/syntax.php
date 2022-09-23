<?php
class Cars
{
    public $name="farari", $color="black";
    public function set_data($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
 
    public function get_data()
    {
        echo "color: " . $this->color . "\n" . "name: " . $this->name. "\n";
    }
}


$car1 = new Cars();
$car2 = new Cars();

// $car1->set_data("Farari", "black");
// $car2->set_data("honda", "red");

$car1->name="toyota";
echo $car1->name;

// $car1->get_data();
// $car2->get_data();

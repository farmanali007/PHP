<?php
class fruits{

    protected $fruit_name,$fruit_color;
    public function __construct($name,$color)
    {
        $this->fruit_name = $name;
        $this->fruit_color = $color;
    }

    protected function intro(){
        echo "This is {$this->fruit_name} and its color is {$this->fruit_color}";
    }
}
class strawbbery extends fruits{
    public $fruit_weight;
    public function __construct($name,$color,$weight)
    {
        
        $this->fruit_name = $name;
        $this->fruit_color = $color;
        $this->fruit_weight = $weight;
    }
    public function intro(){
        // $this->intro();
        // echo "\n";
        echo "fruit name is {$this->fruit_name}, color is {$this->fruit_color} , weight is  {$this->fruit_weight} gram\n";
    }

}

$strawbbery = new strawbbery("strawbbery", "red",50);
// $strawbbery->intro();
$strawbbery->intro();


?>
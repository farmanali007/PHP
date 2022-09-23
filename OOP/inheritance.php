<?php
class employee{
    public $name, $age, $sallary;
    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->sallary = $s;
    }
    function info(){
        echo "<h3>Employee Info</h3>";
        echo "Name: " . $this->name. "<br>";
        echo "Age: " . $this->age. "<br>";
        echo "sallary: " . $this->sallary. "<br>";
    }
}
//class inheritance
class manager extends employee{
    public $ta = 1000;
    public $phone = 500;
    public $totalSallary;
    function info(){
        echo "<h3>Manager Profile</h3>";
        $this->totalSallary = $this->ta + $this->phone + $this->sallary;
        echo "Name: " . $this->name. "<br>";
        echo "Age: " . $this->age. "<br>";
        echo "sallary: " . $this->totalSallary. "<br>";
    }
    
}
$e1 = new employee("farman", 23, 20000);
$e2 = new manager("John Doe", 33, 30000);
$e1->info();
$e2->info();
?>
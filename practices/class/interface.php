<?php
interface animal{
    public function makeSound();//all function must be public
}
//cat is not a child calss
class cat implements animal{
    public function makeSound()
    {
        echo "\nMeow Meow\n";
    }
}
class dog implements animal{
    public function makeSound()
    {
        echo "\nbark bark\n";
    }
}
class mouse implements animal{
    public function makeSound()
    {
        echo "\nsqueak squeak\n";
    }
}

$cat = new cat();
$dog = new dog();
$mouse = new mouse();
$animal = array($cat, $dog, $mouse);
foreach($animal as $animal){
    $animal->makeSound();
}

?>
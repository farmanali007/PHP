<?php

use myclass as GlobalMyclass;

trait Test{
    private function sayHellow(){
        echo "<b>Engr. Farman Ali</b>";
    }
}
class myclass{
    use Test{
        Test::sayHellow as public newHellow;
    }
}
$obj = new myclass();
$obj->newHellow();





// trait First{
//     function sayHello(){
//         echo "Helo From First Trait";
//     }
// }

// trait Second{
//     function sayHello(){
//         echo "Helo From Second Trait";
//     }
// }

// class MyClass{
//     use First, Second{
//         First::sayHello insteadOf Second;
//         Second::sayHello as NewSayHello;//Rename the functions
//     }
// }

// $obj = new MyClass();
// $obj->sayHello();
// echo "<br>";
// $obj->NewsayHello();











// trait test{
//     function Name(){
//         echo "<h1>test | Farman Ali<h2>";
//     } 
  
// }
// class ParentClass{
//     use test;
//     function Name(){
//         echo "<h1>ParentClass | Farman Ali<h2>";
//     }
// }
// class ChildrenClass extends ParentClass{
//     use test;
//     function Name(){
//         echo "<h1>ChildClass | Farman Ali<h2>";
//     }
// }
// $obj = new ChildrenClass();
// $obj->Name();



?>
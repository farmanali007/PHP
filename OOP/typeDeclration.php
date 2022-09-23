<?php
class school{
    function getNames(students $names){//type hinting
        echo "<ul>";
        foreach($names->Names() as  $name){
            echo "<li>" . $name . "</li>";
        }
        echo "</ul>";
        
    }
}
class students{
    function Names(){
        return ["farman Ali", "virtual", "php"];
    }
}
class library{

}
$lib = new school();
$sch = new school();
$stu = new students();
$sch->getNames($stu);
// $sch->getNames($stu);//Error because we use typehinting












// class Hellow{
//     function sayHellow(){
//         echo "Hellow Mr. Engr. Farman Ali";
//     }
// }
// class By{
//     function sayBy(){
//         echo "Bye Bye Mr. Engr. Farman Ali";
//     }
// }
// function wow(By $c){
// // $c->sayHellow();
// $c->sayBy();

// }
// $obj = new Hellow();
// $obj2 = new By();
// wow($obj2);



// function show(array $num){
//     foreach ($num as $num){
//         echo $num . "<br>";
//     }
// }
// $test = ["farman", "engr", 34];
// show($test);


?>
<?php
class myclass{
    public $var1;
    public $var2;
    public $var3="hello";
    public $var4=12;
    private $var5;
    public function getClassVars(){

        echo "here all variabls are shown included private vars like \"\$var5\"";

        // $class_vars = get_class_vars(get_class($this));
        $class_vars = get_class_vars(__CLASS__);
echo "<pre>";
print_r($class_vars);
echo "</pre>";
    }

}
$obj = new myclass();
$obj->getClassVars();
$class_vars = get_class_vars(get_class($obj));
echo "here only public variabls shown";
echo "<pre>";
print_r($class_vars);
echo "</pre>";


//print declare classes | interface| traits
// print_r(get_declared_classes());
// print_r(get_declared_interfaces());
// print_r(get_declared_traits());



?>
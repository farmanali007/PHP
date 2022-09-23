<?php
class abc{

}
class xyz extends abc{
    public function getParentClass(){
        echo "parent class of \$obj is : " . get_parent_class($this);
    }
}
$obj = new xyz();
$obj->getParentClass();
echo "<br>parent class of \$obj is : " . get_parent_class($obj);

?>
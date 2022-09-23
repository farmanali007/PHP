<?php
class student{
    private $first_name;
    private $last_name;

    private function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __call($method, $arguments)
    {
        // echo "this private method or NON existing method : $method";

        if(method_exists($this, $method)){

          $this->method();
          echo "set values";

        }else{
            echo "method does not exists : $method";

        }
    }

}

 $test = new student("farman");
$test->hello();
$test->setName("farman", "ali");


?>
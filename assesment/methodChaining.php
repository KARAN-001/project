
1. Demonstrate the concept of method chaing in PHP.

.






<?php 

class chaining
 {
     // Method chaining is the concept of calling all the function that may or may not apply changes on a particular object
//It's an easy way of calling multiple methods which work on a common object
// we can use it for "PHP Animation"
     public $str;

    function __construct()
    {
        $this->str .="This is from contructor!!";
        return $this;
    }
    function  first()
    {
        $this->str .="This is from  first method!!";
        return $this;
    }
    function second()
    {
        $this->str .="This is from  second method!!";
        return $this;
    }
    function getStr()
    {
        return $this->str;
    }
}

    $var = new chaining();

echo $var->first()->second()->getstr();


?>

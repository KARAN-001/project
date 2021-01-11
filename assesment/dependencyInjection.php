5. What do you understand by dependency injection.




<?php

class First_class
{
    //dependency injection is a technique whereby one object supplies the dependencies of another objectWhat is Dependency Injection
    public $var1 ="implementing dependency injection";

    public function getValue(){
       return $this->var1;
    }
}

class Second_class
{
    public $var2;

    function __construct(First_class $first)
    {
   $this->var2=$first->var1;
    }
}
$first= new First_class();
$second= new Second_class($first);



?>
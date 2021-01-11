4. What are traits and namespaces? Give Example.

<?php

//Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

//Traits are declared with the trait keyword:
trait trait1
{
    public function traitmsg() {
        echo "<br/>This is the Trait ";
      }
}

class traitUser{
    use trait1;
}
$obj = new traitUser();
$obj->traitmsg();

?>

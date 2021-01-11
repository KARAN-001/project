2. Create an interface A that has 2 methods,abstract class B implements the method and gives definition for 1 method.Create a concrete class and create its object .

<?php
interface A
{
    public function first();
    public function second();
}
 abstract class B implements A
 {
   abstract public function first($var){
       
   }

?>



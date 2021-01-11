#3. How multiple inheritance is handled in PHP? Give example.
<?php
/*Multiple Inheritance is the property of the Object Oriented Programming languages in which child class or sub class 
can inherit the properties of the multiple parent classes or super classes*/
class base{


  public function display()
  {
    echo "<br />I am the base class";
  }
}
interface B_interface
{
    const var2="I am the interface";
    public function idisplay();
}

class multiple_inhertance extends base implements B_interface
{
    public function idisplay(){
        echo " <br />I am the interface";
    }
}

$obj = new multiple_inhertance();
$obj->display();
$obj->idisplay();
 
?>

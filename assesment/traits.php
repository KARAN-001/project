4. What are traits and namespaces? Give Example.

<?php


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
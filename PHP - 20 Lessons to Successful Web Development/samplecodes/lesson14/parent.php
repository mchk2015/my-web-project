<!DOCTYPE html>
<html>
  <head>
    <title>Using parent Example</title>
  </head>
  <body style='font-family:Courier New'>

<?php

  $object = new Child;
  $object->output1();
  $object->output2();

  class Father
  {
    function output1()
    {
      echo "This is the parent object (class Father) responding<br>";
    }
  }

  class Child extends Father
  {
    function output1()
    {
      echo "This is the child object (class Child) responding<br>";
    }
    function output2()
    {
      parent::output1();
    }
  }

?>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>Passing Arguments</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  Example(1, 2); // This will leave the 3rd argument undefined.
  
  function Example($a, $b, $c)
  {
    echo "[$a - $b - $c]";
  }
?>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>Using Functions 1</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  echo SquareRoot(64);

  function SquareRoot($n)
  {
    return pow($n, 0.5);
  }
?>
  </body>
</html>

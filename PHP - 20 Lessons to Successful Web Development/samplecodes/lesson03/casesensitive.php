<!DOCTYPE html>
<html>
  <head>
    <title>Case Sensitivity</title>
  </head>
  <body style='font-family:monospace'>
<?php
  $fred = 1;
  $Fred = 2;
  $FRED = 3;
  echo '$fred is ' . "$fred<br>";
  echo '$Fred is ' . "$Fred<br>";
  echo '$FRED is ' . "$FRED<br>";
?>
  </body>
</html>

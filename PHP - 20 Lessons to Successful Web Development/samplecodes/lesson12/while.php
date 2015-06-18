<!DOCTYPE html>
<html>
  <head>
    <title>Using while()</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $j = 0;

  while ($j++ < 10)
  {
    echo "$j times 10 is " . $j * 10 . '<br>';
  }
?>
  </body>
</html>

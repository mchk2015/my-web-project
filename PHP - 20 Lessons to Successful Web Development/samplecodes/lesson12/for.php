<!DOCTYPE html>
<html>
  <head>
    <title>Using for() loops</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  for ($j = 10, $f = 1; $j > 0 ; --$j)
  {
  	$f *= $j;
  }
  
  echo "10! is $f";
?>
  </body>
</html>

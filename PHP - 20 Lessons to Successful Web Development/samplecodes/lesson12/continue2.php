<!DOCTYPE html>
<html>
  <head>
    <title>Using Continue (2)</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  for ($i = 1 ; $i <= 100 ; ++$i)
  {
    for ($j = 2 ; $j <= sqrt($i) ; ++$j)
      if (!($i % $j)) continue 2;
    echo "$i ";
  }
?>
  </body>
</html>

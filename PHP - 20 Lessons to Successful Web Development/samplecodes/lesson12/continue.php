<!DOCTYPE html>
<html>
  <head>
    <title>Using continue</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  for ($j = -5 ; $j < 6 ; ++$j)
  {
    if ($j == 0) continue;
  
    echo "1/$j is " . 1 / $j . '<br>';
  }
?>
  </body>
</html>

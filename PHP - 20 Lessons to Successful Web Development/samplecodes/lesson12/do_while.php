<!DOCTYPE html>
<html>
  <head>
    <title>Using do ... while()</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $j = 10;
  $f = 1;

  do
  {
    // Uncomment the following to see each step
    // echo '$f is ' . $f . ' and $j is ' . $j . '<br>';

    $f *= $j--;

  } while ($j > 0);

  echo '10! is ' . $f;
?>
  </body>
</html>

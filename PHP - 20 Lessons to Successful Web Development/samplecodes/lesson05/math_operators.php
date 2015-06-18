<!DOCTYPE html>
<html>
  <head>
    <title>Math &amp; ++/-- Operators</title>
  </head>
  <body style='font-family:monospace'>
<?php
  echo '3 + 11 results in ' . (3 + 11) . '<br>';
  echo '9 -  4 results in ' . (9 -  4) . '<br>';
  echo '3 *  4 results in ' . (3 *  4) . '<br>';
  echo '21 / 8 results in ' . (21 / 8) . '<br>';
  echo '21 % 8 results in ' . (21 % 8) . '<br>';
  $a = 5;
  echo '$a = 5; ++$a results in $a equal to ' . ++$a . '<br>';
  $a = 5;
  echo '$a = 5; --$a results in $a equal to ' . --$a;
?>
  </body>
</html>
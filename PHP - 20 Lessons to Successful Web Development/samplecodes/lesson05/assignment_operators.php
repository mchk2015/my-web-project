<!DOCTYPE html>
<html>
  <head>
    <title>Assignment Operators</title>
  </head>
  <body style='font-family:monospace'>
<?php
  $a = 21; $a  = 42; echo '$a = 21; a  = 42 results in a equal to ' . $a . '<br>';
  $a = 21; $a += 5;  echo '$a = 21; a +=  5 results in a equal to ' . $a . '<br>';
  $a = 21; $a -= 2;  echo '$a = 21; a -=  2 results in a equal to ' . $a . '<br>';
  $a = 21; $a *= 3;  echo '$a = 21; a *=  3 results in a equal to ' . $a . '<br>';
  $a = 21; $a /= 10; echo '$a = 21; a /= 10 results in a equal to ' . $a . '<br>';
  $a = 21; $a %= 10; echo '$a = 21; a %= 10 results in a equal to ' . $a . '<br>';
?>
  </body>
</html>
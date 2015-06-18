<!DOCTYPE html>
<html>
  <head>
    <title>Type Casting</title>
  </head>
  <body style='font-family:monospace'>
<?php
  $s = '12345';                   // String
  echo '$s = ' . "$s<br>";
  
  $s = '12345' + 54321;           // String and a number
  echo '$s = ' . "$s<br>";
  
  $s = '12345' * 1 + 54321;       // String cast to a number with * 1 and a number
  echo '$s = ' . "$s<br>";
  
  $s = ((int) '12345') + 54321;   // String cast to a number with (int) and a number
  echo '$s = ' . "$s<br>";
  
  $s = ((string) 12345) . ' hello';  // Number cast to a string with (string) and a number
  echo '$s = ' . "$s<br>";
?>
  </body>
</html>

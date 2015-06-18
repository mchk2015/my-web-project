<!DOCTYPE html>
<html>
  <head>
    <title>Logical Operators</title>
  </head>
  <body style='font-family:monospace;white-space:pre'>
<?php
  echo          'The result of   1 == 1 &&  2 == 2 is ' . ( (1 == 1 &&  2 == 2) ? 'TRUE' : 'FALSE');
  echo '<br>' . 'The result of   1 == 1 ||  2 == 3 is ' . ( (1 == 1 ||  2 == 3) ? 'TRUE' : 'FALSE');
  echo '<br>' . 'The result of   1 == 1 xor 2 == 2 is ' . ( (1 == 1 xor 2 == 2) ? 'TRUE' : 'FALSE');
  echo '<br>' . 'The result of !(1 == 1)           is ' . (!(1 == 1)            ? 'TRUE' : 'FALSE');
?>
  </body>
</html>
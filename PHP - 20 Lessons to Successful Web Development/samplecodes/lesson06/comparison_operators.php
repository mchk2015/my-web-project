<!DOCTYPE html>
<html>
  <head>
    <title>Comparison Operators</title>
  </head>
  <body style='font-family:monospace;white-space:pre'>
<?php
  echo          'The result of 1  ==  1  is ' . (1  ==  1  ? 'TRUE' : 'FALSE');
  echo '<br>' . "The result of 1  == '1' is " . (1  == '1' ? 'TRUE' : 'FALSE');
  echo '<br>' . "The result of 1 === '1' is " . (1 === '1' ? 'TRUE' : 'FALSE');
  echo '<br>' . 'The result of 1  !=  2  is ' . (1  !=  2  ? 'TRUE' : 'FALSE');
  echo '<br>' . "The result of 1 !== '1' is " . (1 !== '1' ? 'TRUE' : 'FALSE');
  echo '<br>' . 'The result of 1   >  2  is ' . (1   >  2  ? 'TRUE' : 'FALSE');
  echo '<br>' . 'The result of 1   <  2  is ' . (1   <  2  ? 'TRUE' : 'FALSE');
  echo '<br>' . 'The result of 1  >=  1  is ' . (1  >=  1  ? 'TRUE' : 'FALSE');
  echo '<br>' . 'The result of 2  <=  1  is ' . (2  <=  1  ? 'TRUE' : 'FALSE');
?>
  </body>
</html>
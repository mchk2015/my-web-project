<!DOCTYPE html>
<html>
  <head>
    <title>Increment & Decrement</title>
  </head>
  <body style='font-family:monospace'>
<?php
  $Time = 9;
  echo 'The time is ' . ++$Time;
  echo ($Time < 12) ? 'AM' : 'PM';

  echo "<br>The time is " . ++$Time;
  echo ($Time < 12) ? 'AM' : 'PM';
 
  echo "<br>The time is " . ++$Time;
  echo ($Time < 12) ? 'AM' : 'PM';

  echo '<br><br>';

  $a = 10;
  echo '$a is ' . $a++ . ' and is now ' .   $a . '<br>';
  echo '$a is ' . $a++ . ' and is now ' .   $a . '<br>';
  echo '$a is ' . $a++ . ' and is now ' .   $a . '<br><br>';

  $b = 10;
  echo '$b is ' . $b   . ' and is now ' . --$b . '<br>';
  echo '$b is ' . $b-- . ' and is now ' .   $b . '<br>';
?>
  </body>
</html>
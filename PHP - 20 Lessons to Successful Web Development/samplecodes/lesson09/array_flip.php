<!DOCTYPE html>
<html>
  <head>
    <title>Using array_flip()</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Actors = array('Jack' => 'Nicholson', 'Marlon' => 'Brando', 'Julia' => 'Roberts');

  echo 'Normal: <br><br>';
  foreach($Actors as $key => $value) echo "$key $value<br>";

  $Actors = array_flip($Actors);

  echo '<br>Flipped: <br><br>';
  foreach($Actors as $key => $value) echo "$key $value<br>";
  
  echo '<br>';

  $test = array('a', 'b', 'c', 'd');
  foreach($test as $key => $value) echo "$key $value<br>";

  echo '<br>';

  $test = array_flip($test);
  foreach($test as $key => $value) echo "$key $value<br>";
?>
  </body>
</html>
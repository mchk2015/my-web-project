<!DOCTYPE html>
<html>
  <head>
    <title>Using array_pop() Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Cats = array('Long Hair', 'Short Hair', 'Dwarf',
                'Farm', 'Tabby', 'Tortoiseshell');

  foreach($Cats as $cat) echo "$cat<br>";
  echo '<br>Popping off the value ' . array_pop($Cats) . '<br><br>';
  echo 'Remaining elements: <br><br>';

  foreach($Cats as $cat) echo "$cat<br>";
?>
  </body>
</html>
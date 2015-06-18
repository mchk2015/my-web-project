<!DOCTYPE html>
<html>
  <head>
    <title>Using array_reverse() Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Cats = array('Long Hair', 'Short Hair', 'Dwarf',
                'Farm', 'Tabby', 'Tortoiseshell');

  echo 'Normal: <br><br>';
  foreach($Cats as $cat) echo "$cat<br>";

  $Cats = array_reverse($Cats);

  echo '<br>Reversed: <br><br>';
  foreach($Cats as $cat) echo "$cat<br>";
?>
  </body>
</html>
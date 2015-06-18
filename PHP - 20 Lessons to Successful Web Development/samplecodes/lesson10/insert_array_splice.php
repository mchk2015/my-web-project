<!DOCTYPE html>
<html>
  <head>
    <title>Using insert with array_splice()</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Cats = array('Long Hair', 'Short Hair', 'Dwarf',
                'Farm', 'Tabby', 'Tortoiseshell');

  echo 'Before: <br><br>';
  foreach($Cats as $cat) echo "$cat<br>";

  array_splice($Cats, 2, 0, array('Siamese', 'Persian'));
  
  echo '<br>After: <br><br>';
  foreach($Cats as $cat) echo "$cat<br>";
?>
  </body>
</html>

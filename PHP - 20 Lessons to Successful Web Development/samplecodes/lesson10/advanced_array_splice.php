<!DOCTYPE html>
<html>
  <head>
    <title>Advanced array_splice()</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Cats = array('Long Hair', 'Short Hair', 'Dwarf',
                'Farm', 'Tabby', 'Tortoiseshell');

  echo 'Before: <br><br>';
  foreach($Cats as $cat) echo "$cat<br>";

  $Removed = array_splice($Cats, 2, 3, array('Siamese', 'Persian'));
  
  echo '<br>Elements removed: <br><br>';
  foreach($Removed as $item) echo "$item<br>";
  
  echo '<br>Elements remaining: <br><br>';
  foreach($Cats as $cat) echo "$cat<br>";
?>
  </body>
</html>

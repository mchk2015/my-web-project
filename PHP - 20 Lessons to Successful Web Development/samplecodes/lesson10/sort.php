<!DOCTYPE html>
<html>
  <head>
    <title>Using sort()</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Cats = array('Long Hair', 'Short Hair', 'Dwarf',
                'Farm', 'Tabby', 'Tortoiseshell', 1, 23, '117', 900);

  echo 'Before: <br><br>';
  foreach($Cats as $cat) echo "$cat<br>";

  sort($Cats);

  echo '<br>Sorted Alphabetically: <br><br>';
  foreach($Cats as $cat) echo "$cat<br>";
?>
  </body>
</html>
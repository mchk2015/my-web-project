<!DOCTYPE html>
<html>
  <head>
    <title>Using array_push() Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Cats = array('Long Hair', 'Short Hair', 'Dwarf',
                'Farm', 'Tabby', 'Tortoiseshell');

  foreach($Cats as $cat) echo "$cat<br>";
  array_push($Cats, 'Siamese');
  echo '<br><br>';
  foreach($Cats as $cat) echo "$cat<br>";
?>
  </body>
</html>
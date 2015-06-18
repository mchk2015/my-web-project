<!DOCTYPE html>
<html>
  <head>
    <title>Using array_reverse()</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Cats = array('Long Hair', 'Short Hair', 'Dwarf',
                'Farm', 'Tabby', 'Tortoiseshell');

  echo 'Before: <br><br>';
  foreach($Cats as $cat) echo "$cat<br>";

  sort($Cats);
	$Cats = array_reverse($Cats);

  echo '<br>Reverse Sorted Alphabetically: <br><br>';
  foreach($Cats as $cat) echo "$cat<br>";
?>
  </body>
</html>
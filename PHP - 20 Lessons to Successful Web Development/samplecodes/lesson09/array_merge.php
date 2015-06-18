<!DOCTYPE html>
<html>
  <head>
    <title>Using array_merge() Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Cats = array('Long Hair', 'Short Hair', 'Dwarf',
                'Farm', 'Tabby', 'Tortoiseshell');

  $Dogs = array('Pit Bull', 'Spaniel', 'Terrier',
                'Beagle', 'Shepherd', 'Bulldog');

  //$Pets = array_merge($Cats, $Dogs);
  //foreach($Pets as $pet) echo "$pet<br>";

  foreach(array_merge($Cats, $Dogs) as $pet)
	  echo "$pet<br>";
?>
  </body>
</html>
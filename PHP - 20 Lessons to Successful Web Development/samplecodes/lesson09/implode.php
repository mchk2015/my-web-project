<!DOCTYPE html>
<html>
  <head>
    <title>Using implode() Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Cats = array('Long Hair', 'Short Hair', 'Dwarf',
  			        'Farm', 'Tabby', 'Tortoiseshell');

  echo implode(' and ', $Cats);
?>
  </body>
</html>
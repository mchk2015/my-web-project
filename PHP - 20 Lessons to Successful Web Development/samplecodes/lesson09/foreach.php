<!DOCTYPE html>
<html>
  <head>
    <title>foreach() Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Cats = array('Long Hair', 'Short Hair', 'Dwarf',
                'Farm', 'Tabby', 'Tortoiseshell');

  foreach($Cats as $cat) echo "$cat<br>";

  $SoccerTeam = array(
    'Andy'  => 10,
    'Brian' => 8,
    'Cathy' => 9,
    'David' => 10,
    'Ellen' => 9
  );
  
  echo '<br>';
  
  foreach($SoccerTeam as $player => $age)
    echo "$player is $age years old<br>";
?>
  </body>
</html>
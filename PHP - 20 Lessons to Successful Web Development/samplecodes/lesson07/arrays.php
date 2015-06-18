<!DOCTYPE html>
<html>
  <head>
    <title>Array Examples</title>
  </head>
  <body style='font-family:Courier New'>
<?php
    $PetArray = array();                             // Creating a new empty array
    $PetArray[0] = 'cat';                            // Adding values to specific elements...
    $PetArray[1] = 'dog';
    $PetArray[2] = 'fish';
    echo "$PetArray[0], ";
    echo "$PetArray[1], ";
    echo "$PetArray[2]<br><br>";
    
    $DrinkArray = array('water', 'milk', 'soda');    // Creating and adding elements
    echo "$DrinkArray[0], ";
    echo "$DrinkArray[1], ";
    echo "$DrinkArray[2]<br><br>";
    
    $FoodArray = array('pasta', 'cheese', 'tomato'); // Creating and adding elements
    echo "$FoodArray[0], ";
    echo "$FoodArray[1], ";
    echo "$FoodArray[2]<br><br>";

    $SoccerTeam = array();
    $SoccerTeam['Andy']  = 10;
    $SoccerTeam['Brian'] = 8;
    $SoccerTeam['Cathy'] = 9;
    $SoccerTeam['David'] = 10;
    $SoccerTeam['Ellen'] = 9;
    echo $SoccerTeam['Andy']  . ', ';
    echo $SoccerTeam['Brian'] . ', ';
    echo $SoccerTeam['Cathy'] . ', ';
    echo $SoccerTeam['David'] . ', ';
    echo $SoccerTeam['Ellen'] . '<br><br>';

    $MyInfo = array(
      'Name'       => 'Bill Gates',
      'DOB'        => 1955,
      'Occupation' => 'Philanthropist',
      'Children'   => 3,
      'Worth'      => 79000000000
    );
    echo $MyInfo['Name']       . ', ';
    echo $MyInfo['DOB']        . ', ';
    echo $MyInfo['Occupation'] . ', ';
    echo $MyInfo['Children']   . ', ';
    echo $MyInfo['Worth']      . '<br><br>';
?>
  </body>
</html>

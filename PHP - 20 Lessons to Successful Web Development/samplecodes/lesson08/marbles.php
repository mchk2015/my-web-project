<!DOCTYPE html>
<html>
  <head>
    <title>Marbles Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $marbles = array('small' => array(), 'medium' => array(), 'large' => array());

  $marbles['small' ]['red']   = 1;
  $marbles['small' ]['green'] = 2;
  $marbles['small' ]['blue']  = 3;
  $marbles['medium']['red']   = 4;
  $marbles['medium']['green'] = 5;
  $marbles['medium']['blue']  = 6;
  $marbles['large' ]['red']   = 7;
  $marbles['large' ]['green'] = 8;
  $marbles['large' ]['blue']  = 9;
  
  echo 'There are ' . $marbles['medium']['blue'] . ' medium bags of blue marbles';
?>
  </body>
</html>

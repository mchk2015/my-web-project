<!DOCTYPE html>
<html>
  <head>
    <title>Othello Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Row0 = array('-', '-', '-', '-', '-', '-', '-', '-');
  $Row1 = array('-', '-', '-', '-', '-', '-', '-', '-');
  $Row2 = array('-', '-', 'W', '-', 'B', '-', '-', '-');
  $Row3 = array('-', '-', 'B', 'W', 'B', '-', '-', '-');
  $Row4 = array('-', '-', 'B', 'B', 'B', 'W', '-', '-');
  $Row5 = array('-', '-', 'B', '-', 'W', '-', '-', '-');
  $Row6 = array('-', '-', '-', 'W', '-', '-', '-', '-');
  $Row7 = array('-', '-', '-', '-', '-', '-', '-', '-');
  
  $Board = array($Row0, $Row1, $Row2, $Row3,
	               $Row4, $Row5, $Row6, $Row7);
  
  for ($j = 0 ; $j < 8 ; ++$j)
  {
  	for ($k = 0 ; $k < 8 ; ++$k)
  	{
  		echo $Board[$j][$k] . ' ';
  	}
    
    echo '<br>';
  }

  $Board[5][3] = 'W';
  $Board[4][3] = 'W';

	echo '<br>';
  
  for ($j = 0 ; $j < 8 ; ++$j)
  {
  	for ($k = 0 ; $k < 8 ; ++$k)
  	{
  		echo $Board[$j][$k] . ' ';
  	}
  
  	echo '<br>';
  }
?>
  </body>
</html>

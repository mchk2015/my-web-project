<!DOCTYPE html>
<html>
  <head>
    <title>Passing by Reference</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $MyVar1 = 'Elephant';
	$MyVar2 = 3.14159265;

	echo '$MyVar1 == ' . "$MyVar1<br>";
	echo '$MyVar2 == ' . "$MyVar2<br>";

  echo '<br>Swapping values<br><br>';
  swap($MyVar1, $MyVar2);

	echo '$MyVar1 == ' . "$MyVar1<br>";
	echo '$MyVar2 == ' . "$MyVar2";

  function swap(&$v1, &$v2)
  {
    $t  = $v1;  // Create temporary copy of $v1
    $v1 = $v2;  // Move value from $v2 to $v1
    $v2 = $t;   // Assign $v2 previous value of $v1
  }
?>
  </body>
</html>

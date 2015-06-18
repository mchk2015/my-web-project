<!DOCTYPE html>
<html>
  <head>
    <title>Using $GLOBALS[]</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $MyVar1 = 1;
	$MyVar2 = 2;

	echo 'Outside of any functions<br><br>';
	echo '$MyVar1 == ' . "$MyVar1<br>";
	echo '$MyVar2 == ' . "$MyVar2<br><br>";

  Example();

  function Example()
  {
    global $MyVar2;

    echo 'Inside a function<br><br>';
    echo '$MyVar1 == ' . $GLOBALS["MyVar1"] . '<br>';
    echo '$MyVar2 == ' . $MyVar2;
  }
?>
  </body>
</html>

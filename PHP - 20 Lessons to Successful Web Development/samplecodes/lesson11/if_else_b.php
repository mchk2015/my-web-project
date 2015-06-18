<!DOCTYPE html>
<html>
  <head>
    <title>Using if(), elseif() and else</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Degrees = 98.4;

  if ($Degrees < 98 && $Degrees > 96)
  {
  	echo 'Your temperature is low.<br>';
  	echo 'You should wrap up warm.';
  }
  elseif ($Degrees < 96)
  {
  	echo 'You may have hypothermia.<br>';
    echo 'You need to see a Doctor.';
  }
  elseif ($Degrees > 99 && $Degrees < 101)
  {
  	echo 'You have a raised temperature.';
  }
  elseif ($Degrees > 101 && $Degrees < 103)
  {
  	echo 'You are running a fever.';
  }
  elseif ($Degrees > 103)
  {
  	echo 'You have a high fever.<br>';
    echo 'You need to see a Doctor';
  }
  else echo "At $Degrees&deg; Your temperature is spot on.";
?>
  </body>
</html>
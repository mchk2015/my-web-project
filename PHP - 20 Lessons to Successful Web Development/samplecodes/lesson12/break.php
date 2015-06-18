<!DOCTYPE html>
<html>
  <head>
    <title>Using break</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $HayStack = array(1, 23, 16.3, 88.23, 11, 24.46, 30, 99);
  $Needle   = 11;

  echo "Searching for $Needle: ";

  for ($j = 0 ; $j < sizeof($HayStack) ; ++$j)
    if ($HayStack[$j] == $Needle) break;

  if ($j < sizeof($HayStack)) echo "Found at index $j";
  else                        echo 'Not found';

  $Needle = 17.3;

  echo "<br>Searching for $Needle: ";

  for ($j = 0 ; $j < sizeof($HayStack) ; ++$j)
    if ($HayStack[$j] == $Needle) break;

  if ($j < sizeof($HayStack)) echo "Found at index $j";
  else                        echo 'Not found';
?>
  </body>
</html>
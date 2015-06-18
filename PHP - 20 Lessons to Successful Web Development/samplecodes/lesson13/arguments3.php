<!DOCTYPE html>
<html>
  <head>
    <title>Accepting variable numbers of arguments</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Flowers = NewArray('Daisy', 'Lilly', 'Crocus');

  foreach($Flowers as $flower) echo "$flower<br>";

  function NewArray()
  {
    $n = func_num_args();
    $a = array();

    for($j = 0 ; $j < $n ; ++$j)
      array_push($a, func_get_arg($j));

    return $a;
  }
?>
  </body>
</html>

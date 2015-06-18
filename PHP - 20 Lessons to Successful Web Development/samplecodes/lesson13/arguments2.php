<!DOCTYPE html>
<html>
  <head>
    <title>Passing Arguments 2</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  echo NewImplode('|', array('cow', 'horse', 'duck'))          . '<br>';
  echo NewImplode(     array('cow', 'horse', 'duck'), ' and ') . '<br>';
  echo NewImplode(     array('cow', 'horse', 'duck'))          . '<br>';

  function NewImplode($arg1, $arg2 = ',')
  {
    return implode($arg1, $arg2);
  } 
?>
  </body>
</html>

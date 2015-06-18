<!DOCTYPE html>
<html>
  <head>
    <title>Using Functions 2</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  echo StrRepeat('Hip hip, hooray. ', 3);

  function StrRepeat($s, $r)
  {
    return implode($s, array_fill(0, ++$r, ''));
  }
?>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>Superglobals</title>
  </head>
  <body style='font-family:monospace'>
<?php

  if (isset($_SERVER['HTTP_REFERER']))
    echo 'You came from ' .
      htmlentities($_SERVER['HTTP_REFERER']);
  else
    echo "<a href='" . $_SERVER['PHP_SELF'] .
      "'>Click here to create a referer</a>";
?>
  </body>
</html>

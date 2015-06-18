<!DOCTYPE html>
<html>
  <head>
    <title>Constants 2</title>
  </head>
  <body style='font-family:monospace'>
<?php

  $platform = 'win';

  switch($platform) // Must be one of 'win', 'mac', or 'lin'
  {
    case 'win': define('DOC_ROOT', 'C:/xampp/htdocs');            break;
    case 'mac': define('DOC_ROOT', '/Applications/XAMPP/htdocs'); break;
    case 'lin': define('DOC_ROOT', '/opt/lampp/htdocs');          break;
  }

  echo 'Document root is: ' . DOC_ROOT;
?>
  </body>
</html>

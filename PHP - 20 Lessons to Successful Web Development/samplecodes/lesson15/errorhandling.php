<!DOCTYPE html>
<html>
  <head>
    <title>Error Handling</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  set_error_handler(function($no, $str, $file, $line)
  {
    echo
      "<div style='border:2px dotted;padding:5px 10px;background:tan'>" .
      "Line $line: <span style='color:red'>$str</span> " .
      "in <span style='color:blue'>$file</span></div>";
  });

  $fred = 1;
  echo $fredd;
?>
  </body>
</html>

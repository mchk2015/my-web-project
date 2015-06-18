<!DOCTYPE html>
<html>
  <head>
    <title>Using switch()</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Color = 'cyan';
  
  switch($Color)
  {
    case 'red':     $C = '#f00'; break;
    case 'green':   $C = '#0f0'; break;
    case 'blue':    $C = '#00f'; break;
    case 'yellow':  $C = '#ff0'; break;
    case 'cyan':    $C = '#0ff'; break;
    case 'magenta': $C = '#f0f'; break;
    case 'white':   $C = '#fff'; break;
    case 'black':
    default:        $C = '#000';
  }

  echo "You chose the color <span style='background:$C'>$Color</span>, which is $C as a CSS color string."
?>
  </body>
</html>
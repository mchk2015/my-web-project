<?php
  $url  = 'http://upload.wikimedia.org/wikipedia/commons/thumb/' .
          '8/85/Smiley.svg/600px-Smiley.svg.png';
  $name = 'smiley.png';
  
  if (!file_exists($name))
  {
    $image = file_get_contents($url);
    file_put_contents($name, $image);
  }

  echo <<<_EOT
<!DOCTYPE html>
<html>
  <head>
    <title>Cross-Web File Handling</title>
  </head>
  <body>
    <h3>Here's a smiley from Wikimedia</h3>
    The image was fetched from <i>$url</i> and saved locally<br>
    (Examine the page source to confirm)
    <img src='$name'>
  </body>
</html>
_EOT;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Fuzzy Matching</title>
  </head>
  <body>
<?php
    $s= "Have you seen my BackPack anywhere?";

    $r = '/back *pack/i';
    preg_match_all($r, $s, $match);
    echo "$s<br><br><b>$r</b> matches: " . implode(',', $match[0]);
?>
  </body>
</html>
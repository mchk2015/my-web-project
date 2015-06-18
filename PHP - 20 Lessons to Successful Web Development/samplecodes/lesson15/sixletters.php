<!DOCTYPE html>
<html>
  <head>
    <title>Finding 6 letter words</title>
  </head>
  <body style='font-family:monospace; font-size:14pt'>
<?php
    $s = "To be, or not to be, that is the question: "   .
         "Whether 'tis Nobler in the mind to suffer "    .
         "The Slings and Arrows of outrageous Fortune, " .
         "Or to take Arms against a Sea of troubles, "   .
         "And by opposing end them.";

    $r = '/\b[\w]{6}\b/';
    preg_match_all($r, $s, $match);
    echo "$s<br><br><b>$r</b> matches " . sizeof($match[0]) . ' times: <b>';
    echo join(', ', $match[0]);
?>
  </body>
</html>

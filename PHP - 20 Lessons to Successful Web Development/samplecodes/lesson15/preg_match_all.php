<!DOCTYPE html>
<html>
  <head>
    <title>Using preg_match_all()</title>
  </head>
  <body>
<?php
    $s = "To be, or not to be, that is the question: "   .
         "Whether 'tis Nobler in the mind to suffer "    .
         "The Slings and Arrows of outrageous Fortune, " .
         "Or to take Arms against a Sea of troubles, "   .
         "And by opposing end them.";

    $r = '/to/i';
    $n = preg_match_all($r, $s, $match);
    echo "$s<br><br><b>$r</b> matches " . sizeof($match[0]) . ' times: ';
    echo join(', ', $match[0]);
?>
  </body>
</html>

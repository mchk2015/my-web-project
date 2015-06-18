<!DOCTYPE html>
<html>
  <head>
    <title>Using preg_replace()</title>
  </head>
  <body>
<?php
    $s = "To be, or not to be, that is the question: "   .
         "Whether 'tis Nobler in the mind to suffer "    .
         "The Slings and Arrows of outrageous Fortune, " .
         "Or to take Arms against a Sea of troubles, "   .
         "And by opposing end them.";

    $n = preg_replace("/'tis/i", "<u>it's</u>", $s);
    echo "<b>Original</b>: $s<br><br><b>Replaced</b>: $n";
?>
  </body>
</html>
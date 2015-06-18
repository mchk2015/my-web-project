<!DOCTYPE html>
<html>
  <head>
    <title>Heredoc</title>
  </head>
  <body style='font-family:monospace'>
<?php
  $tobeornottobe = <<<_EOT
  To be, or not to be, that is the question:
  Whether 'tis Nobler in the mind to suffer
  The Slings and Arrows of outrageous Fortune,
  Or to take Arms against a Sea of troubles,
  And by opposing end them: to die, to sleep
_EOT;

  echo $tobeornottobe;
?>
  </body>
</html>

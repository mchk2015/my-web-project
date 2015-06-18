<!DOCTYPE html>
<html>
  <head>
    <title>Sanitizing Input</title>
  </head>
  <body>
<?php
  $text = '';

  if (isset($_POST['text'])) $text = htmlentities($_POST['text'], ENT_QUOTES);
  if (isset( $_GET['text'])) $text = htmlentities( $_GET['text'], ENT_QUOTES);

echo <<<_EOT
    <form method='post' action='sanitize.php'>
      Enter Text: <input type='text' name='text' value='$text'>
      <input type='submit'>
    </form>
  </body>
</html>
_EOT;
?>
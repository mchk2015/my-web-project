<?php
  $message   = '';
  $self      = $_SERVER['PHP_SELF'];
  $guestbook = '';

  if (isset($_POST['comment']))
  {
    $comment = '<li>' . htmlentities($_POST['comment']) . "</li>\n";
    $handle  = @fopen("guestbook.txt", 'a+') != FALSE
      or $message = 'Cannot open file';

    if ($handle)
    {
      if (@flock($handle, LOCK_EX))
      {
        $flag = @fwrite($handle, $comment);
        @flock($handle, LOCK_UN);
        if (!$flag) $message = 'Cannot write to file';
      }

      @fclose($handle);
    }
  }

  $handle = @fopen("guestbook.txt", 'r') != FALSE
    or $message = 'Cannot open file';

  if ($handle)
  {
    $flag = TRUE;

    if (@flock($handle, LOCK_EX))
    {
      $length    = @filesize('guestbook.txt');
      $guestbook = @fread($handle, $length) or $flag = FALSE;
      @flock($handle, LOCK_UN);
      if ($flag == FALSE) $message = 'Cannot read file';
    }

    @fclose($handle);
  }

  echo <<<_EOT
<!DOCTYPE html>
<html>
  <head>
    <title>Guestbook</title>
    <style>
      textarea {
        width :300px;
        height:100px;
        resize:none;
      }
    </style>
  </head>
  <body>
    <h3>Guestbook</h3>
    <ol>$guestbook</ol>
    <form method='post' action='$self'>
      <textarea name='comment'></textarea><br>
      <input type='submit' value='Add Comment'>
    </form><br>
    $message
  </body>
</html>
_EOT;
?>
<?php
  $message = '';

  if (isset($_POST['list']))
  {
    $mylist = htmlentities($_POST['list']);
    $handle = @fopen('shopping.txt', 'w') != FALSE
      or $message = 'Could not open file for writing';
    @fwrite($handle, $mylist) != FALSE
      or $message = 'Could not save file';
    @fclose($handle);
  }
  elseif (file_exists('shopping.txt'))
  {
    $handle = @fopen('shopping.txt', 'r') != FALSE
      or $message = 'Could not open file for reading';
    $length = filesize('shopping.txt');
    $mylist = @fread($handle, $length) != FALSE
      or $message = 'Could not read file';
    @fclose($handle);
  }
  else $mylist = "Bread\nCheese\nMilk\nEggs\nButter\nChips\n";

  $self = $_SERVER['PHP_SELF'];

  echo <<<_EOT
<!DOCTYPE html>
<html>
  <head>
    <title>File Handling 1</title>
    <style>
      textarea {
        width :150px;
        height:150px;
        resize:none;
      }
    </style>
  </head>
  <body>
    <h3>Your Shopping List</h3>
    <form method='post' action='$self'>
      <textarea name='list'>$mylist</textarea><br>
      <input type='submit' value='Save list'>
      <a href='$self'>Reload</a>
    </form><br>
    $message
  </body>
</html>
_EOT;
?>
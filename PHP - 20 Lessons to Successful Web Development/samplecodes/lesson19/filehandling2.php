<?php
  $message = '';

  if (isset($_POST['list']))
  {
    $mylist = htmlentities($_POST['list']);
    @file_put_contents('shopping.txt', $mylist) != FALSE
      or $message = 'Could not save file';
  }
  elseif (file_exists('shopping.txt'))
  {
    $mylist = @file_get_contents('shopping.txt') != FALSE
      or $message = 'Could not retrieve file';
  }
  else $mylist = "Bread\nCheese\nMilk\nEggs\nButter\nChips\n";

  $self = $_SERVER['PHP_SELF'];

  echo <<<_EOT
<!DOCTYPE html>
<html>
  <head>
    <title>File Handling 2</title>
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
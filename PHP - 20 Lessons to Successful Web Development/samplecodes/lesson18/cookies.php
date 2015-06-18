<!DOCTYPE html>
<html>
  <head>
    <title>Using Cookies</title>
  </head>
  <body>
    <h3>Press Reload to allow the cookie to be set and erased</h3>
<?php
  $username = isset($_COOKIE['username']) ?
    $_COOKIE['username'] : FALSE;

  echo "The username is: $username";

  if (!$username)
  {
    $username = 'admin';
    setcookie('username', $username, time() + 604800);
  }
  else setcookie('username', $username, time() - 3600);
?>
  </body>
</html>

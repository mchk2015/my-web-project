<?php
  $username = '';
  $password = '';

  session_start() != FALSE
    or die('Could not start session');

  if (isset($_SESSION['username'])) $username = $_SESSION['username'];
  if (isset($_SESSION['password'])) $password = $_SESSION['password'];

  echo <<<_EOT
<!DOCTYPE html>
<html>
  <head>
    <title>Using Sessions</title>
  </head>
  <body>
    <h2>You are currently logged in as '$username'</h2>
    (And your password is: '$password')
  </body>
</html>
_EOT;
?>
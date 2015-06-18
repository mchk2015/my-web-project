<?php
  $username = 'admin';
  $password = 'password';

  if (!isset($_SERVER['PHP_AUTH_USER']) ||
      !isset($_SERVER['PHP_AUTH_PW']))
  {
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Please enter your username and password");
  }
  else
  {
    if ($_SERVER['PHP_AUTH_USER'] != $username ||
        $_SERVER['PHP_AUTH_PW']   != $password)
      die("Invalid username/password combination");
  }

  session_start() != FALSE
    or die('Could not start session');

  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;

  echo <<<_EOT
<!DOCTYPE html>
<html>
  <head>
    <title>HTTP Authentication</title>
  </head>
  <body>
    <h2>Welcome. You are now logged in as $username</h2>
    <a href='sessions.php'>Check out this page</a>
  </body>
</html>
_EOT;
?>
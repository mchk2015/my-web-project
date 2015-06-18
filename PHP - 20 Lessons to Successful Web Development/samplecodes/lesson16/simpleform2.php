<!DOCTYPE html>
<html>
  <head>
    <title>A Simple Form (2)</title>
  </head>
  <body style='font-family:monospace;white-space:pre'>
<?php
  $username = '';
  $password = '';

  if (isset($_POST['username'])) $username = $_POST['username'];
  if (isset( $_GET['username'])) $username =  $_GET['username'];
  if (isset($_POST['password'])) $password = $_POST['password'];
  if (isset( $_GET['password'])) $password =  $_GET['password'];

  echo <<< _EOT
  <form method='post' action='simpleform2.php'>
  Enter Username: <input type='text'     name='username' value='$username'>
  Enter Password: <input type='password' name='password' value='$password'>
  <input type='submit'></form>
_EOT;
?>
  </body>
</html>

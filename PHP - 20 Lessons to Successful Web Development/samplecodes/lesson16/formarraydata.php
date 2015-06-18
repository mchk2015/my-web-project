<!DOCTYPE html>
<html>
  <head>
    <title>Form Array Data</title>
  </head>
  <body style='font-family:monospace;white-space:pre'>
<?php
  $foods = array();
  if (isset($_POST['foods'])) $foods = $_POST['foods'];
  if (isset( $_GET['foods'])) $foods =  $_GET['foods'];
  
  foreach($foods as $food) echo "You like $food<br>";
?>
  <form method='post' action='formarraydata.php'>
  Hamburger <input type='checkbox' name='foods[]' value='burger' >
      Pizza <input type='checkbox' name='foods[]' value='pizza'  >
    Burrito <input type='checkbox' name='foods[]' value='burrito'>
    <input type='submit'></form>
  </body>
</html>

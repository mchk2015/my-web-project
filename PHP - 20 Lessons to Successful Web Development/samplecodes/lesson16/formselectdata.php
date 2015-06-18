<!DOCTYPE html>
<html>
  <head>
    <title>Form Select Data</title>
  </head>
  <body style='font-family:monospace;white-space:pre'>
<?php
  $veggies = array();
  if (isset($_POST['veggies'])) $veggies = $_POST['veggies'];
  if (isset( $_GET['veggies'])) $veggies =  $_GET['veggies'];

  foreach($veggies as $veg) echo "You like $veg<br>";
?>
    <form method='post' action='formselectdata.php'>
      Vegetables <select name="veggies[]" size="5" multiple>
        <option value="Peas">Peas</option>
        <option value="Beans">Beans</option>
        <option value="Carrots">Carrots</option>
        <option value="Cabbage">Cabbage</option>
        <option value="Broccoli">Broccoli</option>
      </select>
      <input type='submit'>
    </form>
  </body>
</html>

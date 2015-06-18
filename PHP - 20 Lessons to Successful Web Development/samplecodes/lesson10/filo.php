<!DOCTYPE html>
<html>
  <head>
    <title>FILO (Stack) Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Store = array();

  array_push($Store, 'H'); ShowLast();
  array_push($Store, 'e'); ShowLast();
  array_push($Store, 'l'); ShowLast();
  array_push($Store, 'l'); ShowLast();
  array_push($Store, 'o'); ShowLast();

  echo '<br>' . implode(',', $Store) . '<br><br>';
  
  while (sizeof($Store))
  {
    echo 'Popping: ' . array_pop($Store) . '<br>';
  }
  
  function ShowLast()
  {
    global $Store;
    echo 'Pushed: ' . $Store[sizeof($Store) - 1] . '<br>';
  }
?>
  </body>
</html>

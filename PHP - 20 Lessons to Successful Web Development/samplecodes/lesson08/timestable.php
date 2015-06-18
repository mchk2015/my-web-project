<!DOCTYPE html>
<html>
  <head>
    <title>Two-Dimensional Array Example</title>
  </head>
  <body>
<?php
    $MyTable0 = array( 1,  2,  3,  4,  5,  6,  7,  8,  9, 10);
    $MyTable1 = array( 2,  4,  6,  8, 10, 12, 14, 16, 18, 20);
    $MyTable2 = array( 3,  6,  9, 12, 15, 18, 21, 24, 27, 30);
    $MyTable3 = array( 4,  8, 12, 16, 20, 24, 28, 32, 36, 40);
    $MyTable4 = array( 5, 10, 15, 20, 25, 30, 35, 40, 45, 50);
    $MyTable5 = array( 6, 12, 18, 24, 30, 36, 42, 48, 54, 60);
    $MyTable6 = array( 7, 14, 21, 28, 35, 42, 49, 56, 63, 70);
    $MyTable7 = array( 8, 16, 24, 32, 40, 48, 56, 64, 72, 80);
    $MyTable8 = array( 9, 18, 27, 36, 45, 54, 63, 72, 81, 90);
    $MyTable9 = array(10, 20, 30, 40, 50, 60, 70, 80, 90,100);
    
    $MasterTable = array(
      $MyTable0, $MyTable1, $MyTable2, $MyTable3, $MyTable4,
      $MyTable5, $MyTable6, $MyTable7, $MyTable8, $MyTable9);
    
    echo 'The value at location 2,6 is ' . $MasterTable[3][3];
?>
  </body>
</html>

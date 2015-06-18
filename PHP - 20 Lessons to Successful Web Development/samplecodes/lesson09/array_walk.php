<!DOCTYPE html>
<html>
  <head>
    <title>Using array_walk()</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Nums = array(99, 16, 11, 66.5, 54, 23);
  array_walk($Nums, 'CalcRoot');

	function CalcRoot($item)
  {
	 echo "Root $item is " . sqrt($item) . '<br>';
  }
?>
  </body>
</html>
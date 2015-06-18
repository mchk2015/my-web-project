<!DOCTYPE html>
<html>
  <head>
    <title>Using if(), elseif() and else</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Age = '13-17';

  if ($Age == '0-1')
  {
  	echo 'You are a baby. ';
  	echo 'How can you read this?';
  }
  elseif ($Age == '2-3')
  {
  	echo 'You are a toddler.';
  }
  elseif ($Age == '4-6')
  {
  	echo 'You are an infant. ';
  	echo 'You go to nursery or school.';
  }
  elseif ($Age == '7-12')
  {
  	echo 'You are a child.';
  }
  elseif ($Age == '13-17')
  {
  	echo 'You are a teenager. ';
  	echo 'You are old enough to use Facebook.';
  }
  else echo 'You are an adult.';
?>
  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <title>Using switch()</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $Age = '13-17';
  
  switch($Age)
  {
    case '0-1':   echo 'You are a baby. ';
                  echo 'How can you read this?';
                  break;
    case '2-3':   echo 'You are a toddler.';
                  break;
    case '4-6':   echo 'You are an infant. ';
                  echo 'You go to nursery or school.';
                  break;
    case '7-12':  echo 'You are a child.';
                  break;
    case '13-17': echo 'You are a teenager. ';
                  echo 'You can use Facebook.';
                  break;
    default:      echo 'You are an adult.';
  }
?>
  </body>
</html>
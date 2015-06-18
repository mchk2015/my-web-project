<!DOCTYPE html>
<html>
  <head>
    <title>Browser Detecting</title>
  </head>
  <body>
<?php
  echo '<b>Your browser is</b>: '        . GetBrowser() . '<br>';
  echo '<b>Your user agent string</b>: ' . $_SERVER['HTTP_USER_AGENT'];

  function GetBrowser()
  {
    $UA = $_SERVER['HTTP_USER_AGENT'];

    if     (strstr($UA, 'MSIE'))    return 'IE';
    elseif (strstr($UA, 'Trident')) return 'IE';
    elseif (strstr($UA, 'Opera'))   return 'Opera';
    elseif (strstr($UA, 'OPR'))     return 'Opera';
    elseif (strstr($UA, 'Chrome'))  return 'Chrome';
    elseif (strstr($UA, 'iPod'))    return 'iPod';
    elseif (strstr($UA, 'iPhone'))  return 'iPhone';
    elseif (strstr($UA, 'iPad'))    return 'iPad';
    elseif (strstr($UA, 'Android')) return 'Android';
    elseif (strstr($UA, 'Safari'))  return 'Safari';
    elseif (strstr($UA, 'Firefox')) return 'Firefox';
    elseif (strstr($UA, 'Gecko'))   return 'Firefox';
    else                            return 'Unknown';
  }
?>
  </body>
</html>

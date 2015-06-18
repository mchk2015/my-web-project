<!DOCTYPE html>
<html>
  <head>
    <title>Subclass Constructor example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $object = new ChocChip();
  echo 'Choc Chip Cookies have these properties...<br>';
  echo 'Chewy     : ' . $object->chewy .         '<br>';
  echo 'Chocolate : ' . $object->chocolate;

  class Cookie
  {
    public $chewy;                // Cookies are chewy

    function __construct()
    {
      $this->chewy = 'TRUE';
    }
  }

  class ChocChip extends Cookie
  {
    public $chocolate;            // Choc Chip cookies have chocolate

    function __construct()
    {
      parent::__construct();      // Call parent constructor first
      $this->chocolate = 'TRUE';
    }
  }
?>
  </body>
</html>

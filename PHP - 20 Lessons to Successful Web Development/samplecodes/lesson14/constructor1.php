<!DOCTYPE html>
<html>
  <head>
    <title>Using a Constructor method</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $User = new UserClass('Julie', 'Smith');
  echo $User->GetName();

  class UserClass
  {
    public $firstname, $lastname;

    function UserClass($firstname, $lastname)
    {
      $this->firstname = $firstname;
      $this->lastname  = $lastname;
    }

    function GetName()
    {
      return $this->firstname . ' ' . $this->lastname;
    }
  }
?>
  </body>
</html>

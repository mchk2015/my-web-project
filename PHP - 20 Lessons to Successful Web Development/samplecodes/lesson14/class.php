<!DOCTYPE html>
<html>
  <head>
    <title>Using Classes</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $User = new UserClass('Julie', 'Smith');
  //$User->firstname = 'Julie';
  $User->lastname  = 'Jones';

  echo "The user's first and last names are: " . $User->GetName();

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
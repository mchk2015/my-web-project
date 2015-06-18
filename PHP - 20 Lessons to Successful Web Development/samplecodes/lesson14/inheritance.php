<!DOCTYPE html>
<html>
  <head>
    <title>Inheritance Example</title>
  </head>
  <body style='font-family:Courier New'>
<?php
  $User           = new Subscriber('Julie', 'Smith');
	$User->username = 'jsmith01';
	$User->password = 'letmein';
  echo $User->ShowDetails();

  class UserClass
  {
    public $firstname, $lastname;

    function __construct($firstname = 'anonymous', $lastname = 'user')
    {
      $this->firstname = $firstname;
      $this->lastname  = $lastname;
    }

    function GetName()
    {
      return $this->firstname . ' ' . $this->lastname;
    }
  }

  class Subscriber extends UserClass
  {
    public $username, $password;
  
    function ShowDetails()
    {
      echo "Firstname: "  . $this->firstname . '<br>';
      echo "Lastname :  " . $this->lastname  . '<br>';
      echo "Username :  " . $this->username  . '<br>';
      echo "Password :  " . $this->password  . '<br>';
    }
  }
?>
  </body>
</html>

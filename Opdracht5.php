<?php
/* De User class */
class User {
  public $username;
  public $Lastname;
  public $Birthday;

  public function __construct($name, $lastname, $birthday) {
    $this->_username = $name;
    $this->_Lastname = $lastname;
    $this->_Birthday = $birthday;
  }

  public function getUsername() {
    return $this->_username;
  }

  public function getLastname() {
    return $this->_Lastname;
  }
  
  public function getBirthday() {
    return $this->_Birthday;
  }
}

/* Reguliere procedurele code */
$user = new User('Jan', 'Jansen', '04 Juli 2000');//create object

echo $user->getUsername();
echo $user->getLastname();
echo $user->getBirthday();


?>

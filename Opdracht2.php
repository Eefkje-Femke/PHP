<?php
/* De User class */
class User {
  public $username;
  public $Lastname;

  public function setUsername($name) {
    $this->username = $name;
  }

  public function getUsername() {
    return $this->username;
  }
  public function setLastname($lastname) {
    $this->Lastname = $lastname;
  }

  public function getLastname() {
    return $this->Lastname;
  }
}

/* Reguliere procedurele code */
$user = new User();//create object
$user->setUsername('jan');
$user->setLastname('Jansen');

echo $user->getUsername();
echo $user->getLastname();
?>

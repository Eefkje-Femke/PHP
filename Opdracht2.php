<?php
/* De User class */
class User {
  public $username;

  public function setUsername($name) {
    $this->username = $name;
  }

  public function getUsername() {
    return $this->username;
  }
}

/* Reguliere procedurele code */
$user = new User();
$user->setUsername('jan');

echo $user->getUsername();
?>

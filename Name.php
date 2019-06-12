<?php
/* De User class */
class Name {
  private $Firstname;
  private $Lastname;

  public function setFirstname($name) {
    $this->Firstname = $name;
  }

  public function getFirstname() {
    return $this->Firstname;
  }
  public function setLastname($lastname) {
    $this->Lastname = $lastname;
  }

  public function getLastname() {
    return $this->Lastname;
  }
}

/* Reguliere procedurele code */
$Name = new Name();//create object
$Name->setFirstname('Jan');
$Name->setLastname(' Jansen');

echo $Name->getFirstname();
echo $Name->getLastname();
?>

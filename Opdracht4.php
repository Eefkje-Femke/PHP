<?php
/* De User class */
class Opdracht4 {
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
$Opdracht4 = new Opdracht4();//create object
$Opdracht4->setFirstname('Jan');
$Opdracht4->setLastname(' Jansen');

echo $Opdracht4->getFirstname();
echo $Opdracht4->getLastname();
?>

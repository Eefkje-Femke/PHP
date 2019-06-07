<?php
class NumberID {
  private $numberArr;

  public function __construct() {
    $this->numberArr = array();
      for ($i = 1; $i < 9; $i++) {
        $this->numberArr[]= $i;
        $this->numberArr[]= $i;
      }

  }

  public function getRandomNumber() {
    $index = mt_rand(0, sizeof($this->numberArr)-1);//kiest een random een cijfer tussen 0 en de lengte van de array
    $id = $this->numberArr[$index];//zet de value van de gekozen indez in "id"
    array_splice($this->numberArr, $index, 1);//pakt de gekozen index en value daarvan en verwijderd het dan en schuift alles op
    return $id;
  }
}

?>

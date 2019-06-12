<?php
class Card {
  private $number;


  public function toHtml(){//kind of a toString object
    return $this->number;
  }

  function __construct($number){
    $this->number = $number;
  }
}
?>

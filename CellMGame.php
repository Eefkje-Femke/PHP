<?php
class CellMGame {
    private $_content;
    private $card;
    private $numberID;

    function __construct() {
      $this->_content= array();
        $numberID = new NumberID();
        $this->_content = new Card($numberID->getRandomNumber());//place card object in content
    }

    public function append($content) {
        $this->_content[] = $content;
    }

    public function getContent() {
        return $this->_content;
    }
}


// function __construct($content) {

// $this->_content = array();
// $numberID = new NumberId();
// array_push($this->cards, new Card($numberID->getRandomNumber()));//put card objects in array
// $this->card = new Card($numberID->getRandomNumber());//put card objects in array

//     $this->_content = array();
//     $numberID = new NumberId();
//
//     // $this->cards = array();//create array
//     array_push($this->_content, new Card($numberID->getRandomNumber()));//put card objects in array
// }
//
// public function append($content) {
//     $this->_content[] = $content;
// }
//
// public function getContent() {
//     return $this->_content;
// }
?>

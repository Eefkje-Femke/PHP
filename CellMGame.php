<?php
class CellMGame {
    private $_content;
    private $cards;
    private $numberID;

    function __construct($content) {
        $this->_content = $content;
        $numberID = new NumberId();
        // $this->_numbers = array();

        $this->cards = array();//create array
        array_push($this->cards, new Card($numberID));//put card objects in array
    }

    public function getContent() {
        return $this->_content;
    }
}
?>

<?php
class CellMGame {
    private $_content;
    private $card;

    function __construct($numberID) {
        $this->_content = new Card($numberID);//put card object in content
    }

    public function getContent() {
        return $this->_content;
    }
}



?>

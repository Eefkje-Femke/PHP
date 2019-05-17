<?php
class CellMGame {
    private $_content;

    function __construct($content) {
        $this->_content = $content;
    }

    public function getContent() {
        return $this->_content;
    }

    function chooseNum(){
      $numbers = array();
      for ($n=1; $n < 9; $n++) {
        array_push($numbers, $n);
      }
    }
}
?>

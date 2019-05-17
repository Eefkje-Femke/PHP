<?php
class CellMGame {
    private $_content;
    private $_numbers;
    private $cards;

    function __construct($content) {
      echo "jhj ";
        $this->_content = $content;
        $this->_numbers = array();

        $this->cards = array();
        // for($i=0; $i<16; $i++){
          array_push($this->cards, new Card($i+1));
        // }
    }

    public function getContent() {
        return $this->_content;
    }

    function chooseNum(){
      for ($n = 1; $n < 9; $n++)
      {
          echo $n;
          array_push($numbers, $n,$n);
      }

      foreach ($numbers as &$value)
      {
          return $value;
      }
    }
}
?>

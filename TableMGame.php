<?php
class TableMGame {
  private $_rows;
  private $counter = 1;

  function __construct() {
      $this->_rows = array();
  }

  public function append($row) {
      $this->_rows[] = $row;
  }

  public function draw() {
    echo '<table>'.PHP_EOL; // Begin van de tabel

    foreach($this->_rows as $row) {
        echo '<tr>'.PHP_EOL;

        foreach($row->getCells() as $cell) {
          $MCard = $cell->getContent();
          echo '<td><div class="tableCell hidden" id="'.$this->counter.'">' . $MCard->toHtml() . '</div></td>'.PHP_EOL;
          $this->counter++;
        }
        echo '</tr>'.PHP_EOL;
    }
    echo '</table>'.PHP_EOL;
  }
}
?>

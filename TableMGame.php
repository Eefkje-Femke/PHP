<?php
class TableMGame {
  private $_rows;
  // public $numberArr = array( 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8);

  function __construct() {
      $this->_rows = array();
     // $this->draw();
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
          echo '<td class="tableCell">' . $MCard->toHtml() . '</td>'.PHP_EOL;
        }
        echo '</tr>'.PHP_EOL;
    }
    echo '</table>'.PHP_EOL;
  }
}
?>

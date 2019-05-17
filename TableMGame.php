<?php
class TableMGame {
  private $_rows;

  function __construct() {
      $this->_rows = array();
      $this->draw();
  }

  public function append($row) {
      $this->_rows[] = $row;
  }

  public function draw() {
    echo '<table>'.PHP_EOL; // Begin van de tabel, border voor de duidelijkheid

    foreach($this->_rows as $row) {
        echo '<tr>'.PHP_EOL;

        foreach($row->getCells() as $cell) {
            echo '<td>'.$cell->__construct().'</td>'.PHP_EOL;
        }

        echo '</tr>'.PHP_EOL;
    }
    echo '</table>'.PHP_EOL;
  }
}


?>

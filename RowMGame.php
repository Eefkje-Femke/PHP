<?php
class RowMGame {
    private $_cells;

    function __construct() {
        $this->_cells = array();//hier komen alle cellen in
    }

    public function append($cell) {
        $this->_cells[] = $cell;
    }

    public function getCells() {
        return $this->_cells;
    }
}
?>

<?php


class Test {
  public $numberArr = array();


  public function __construct() {//content werkt nog niet
      // $this->numberArr[] = array( 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8);//create array
      for ($i=1; $i < 9; $i++) {
        $this->numberArr[]= $i;
        $this->numberArr[]= $i;
      }
      print_r($numberArr);
  }

}
?>

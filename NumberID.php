<?php


class NumberID {
  private $_content;
  public $numberArr;


  public function __construct() {//content werkt nog niet
    $this->numberArr = array();
      // $this->numberArr[] = array( 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8);//create array
      for ($i = 1; $i < 9; $i++) {
        $this->numberArr[]= $i;
        $this->numberArr[]= $i;
      }
  }

  public function getRandomNumber() {
    $id = mt_rand(1,8);//chooses random number

    $index = array_search($id, $this->numberArr);//search for number in array
    $this->numberArr = \array_diff($this->numberArr, [$id]);
    unset($this->numberArr[$index]);//delete number in array
    //https://stackoverflow.com/questions/369602/deleting-an-element-from-an-array-in-php

    $this->numberArr = array_values($this->numberArr); // 'reindex' array
    // echo "<br />";
    // print_r($this->numberArr);
    // echo "Index : ";
    // echo $index;
    // echo "<br />";
    // unset($this->numberArr[$index]);//delete number in array
    //
    // echo "<br />";
    // print_r($this->numberArr[14]);

    return $id;
  }
}

?>

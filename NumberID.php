<?php

class NumberId {
  public $numberArr = array( 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8);

  public function getRandomNumber(){
    $id = mt_rand(1,8);//chooses random number

    $index = Search($id, $numberArr);//search for number in array
    unset($numberArr[$index]);//delete number in array

    return $id;
  }
}

?>

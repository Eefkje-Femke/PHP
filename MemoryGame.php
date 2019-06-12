<?php
spl_autoload_register('myAutoloader');


  $classname = new TableMGame();

  $numberID = new NumberID();//create array

  for ($r = 1; $r < 5 ; $r++) {
    $row = new RowMGame();//create new row
      for ($c = 1; $c < 5; $c++){
        $row->append(new CellMGame($numberID->getRandomNumber()));//create new cell
      }
      $classname->append($row);//add row to table
  }
  $classname->draw();


  function myAutoloader($className){
    include 'classes/' . $className . '.php';
  }
  include 'mystyle.css';
  include 'GameRules.js';
?>

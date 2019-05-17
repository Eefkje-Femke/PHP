<?php
  spl_autoload_register('myAutoloader');
  // spl_autoload_register(function($classname){
  //   include "classes/" . $className . ".php";
  // });
  $classname = new TableMGame();

  for ($r = 1; $r < 5 ; $r++) {
    $row = new RowMGame();//create new row
      for ($c = 1; $c < 5; $c++) {
        $row->append(new CellMGame('Dit is cel'.$c));//create new cell
      }
      $classname->append($row);//add row to table
  }
  $classname->draw();

  function myAutoloader($className)
  {
    include 'classes/' . $className . '.php';
  }
?>

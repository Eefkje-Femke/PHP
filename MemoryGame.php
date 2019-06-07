<?php
  spl_autoload_register('myAutoloader');
  // spl_autoload_register(function($classname){
  //   include "classes/" . $className . ".php";
  // });
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


  function myAutoloader($className)
  {
    include 'classes/' . $className . '.php';
  }
?>

<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script>
    $(".tableCell").click(function() {
      alert("hallo");
    });
</script> -->


<style>
table, tr, td {
  border: 1px solid black;
}
table {
  border-collapse: collapse;
  text-align: center;
  margin: 20px;
}
td {
  padding: 25px;
}
</style>

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

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  var card1 = 0;
  var card2 = 0;
  var id1 = 0;
  var id2 = 0;
    $(".tableCell").click(function() {
      var number = $(this).text();
      var id = $(this).attr('id');

      $( "div#"+id ).removeClass("hidden");
        if (card1 == 0)
        {
          id1 = id;
          card1 = number;
        } else {
          id2 = id;
          card2 = number;
        }

        document.getElementById(id).style.visibility = "hidden";

        alert("card1:  " + card1 +" card2: " + card2);
        if(card1 != 0 && card2 != 0){
          if(id1 != id2){
            if(card1 == card2){
              alert("match!");
            }else{
              card1 = 0;
              card2 = 0;
              alert("mismatch!");
            }
          } else{
            alert("cannot click on the same card twice! Please click again");
            card2 = 0;
            id2 = 0;
          }
        }
    });
</script>


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

.hidden{
  visibility: hidden;
}
</style>

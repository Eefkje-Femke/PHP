<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  var card1 = 0,card2 = 0,id1 = 0,id2 = 0, counter = 0;

    $("td.tablecell").click(function() {
      var number = $(this).text();
      var id = $(this).attr('id');

      $( "td#"+id+ " div" ).removeClass("hidden");

        if (card1 == 0)
        {
          id1 = id;
          card1 = number;
        } else {
          id2 = id;
          card2 = number;
        }


        // alert("card1:  " + card1 +" card2: " + card2);
        if(card1 != 0 && card2 != 0){
          if(id1 != id2){
            if(card1 == card2){
              alert("match!");
              card1 = 0,card2 = 0,id1 = 0,id2 = 0;
              counter++;
              $('p#counter').text("Matching cards found: "+ counter)
            }else{
              // alert("mismatch!");
              setTimeout(function(){
                $( "td#"+id1+ " div" ).addClass("hidden");
                $( "td#"+id2+ " div" ).addClass("hidden");
                card1 = 0,card2 = 0,id1 = 0,id2 = 0;
                // alert("mismatch! Please try again");
              }, 1000);
            }
          } else{
            alert("You cannot click on the same card twice! Please click again");
            card2 = 0;
            id2 = 0;
          }
        }
    });
</script>

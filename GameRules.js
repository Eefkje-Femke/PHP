<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  var card1 = 0,card2 = 0,id1 = 0,id2 = 0, counter = 0;

    $("td.tablecell").click(function() {//als er op een vakje wodt geklickt
      var number = $(this).text();//dan krijg je het nummer van de memorykaarje
      var id = $(this).attr('id');//het id

      $( "td#"+id+ " div" ).removeClass("hidden");//je laat ook het nummer op het beeldscherm tevoorschijn toveren

        if (card1 == 0)//dan kijk je welke kaart dit is
        {
          id1 = id;
          card1 = number;
        } else {
          id2 = id;
          card2 = number;
        }


        // alert("card1:  " + card1 +" card2: " + card2);
        if(card1 != 0 && card2 != 0){//hier kijk je of er 2 kaarten zijn aangeklikt
          if(id1 != id2){//dan kijk je of de kaarten niet dezelfde zijn
            if(card1 == card2){//en dan check je of de kaarten matchen
              setTimeout(function(){
                 alert("match!");
              }, 1000);
              card1 = 0,card2 = 0,id1 = 0,id2 = 0;//zet je alles weer op 0
              counter++;
              $('p#counter').text("Matching cards found: "+ counter)
            }else{
              // alert("mismatch!");
              setTimeout(function(){
                $( "td#"+id1+ " div" ).addClass("hidden");//de kaarten woden weer omgedraaid
                $( "td#"+id2+ " div" ).addClass("hidden");
                card1 = 0,card2 = 0,id1 = 0,id2 = 0;//zet je alles weer op 0
                alert("mismatch! Please try again");
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

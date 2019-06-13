<!DOCTYPE html>
<html lang="nl">
  	<head>
  		<meta charset="utf-8"/>
  		<title>De titel van je website</title>
  	</head>
	<body>
    <?php
      include 'HuisEigenschappen.php';
        $huis = new HuisEigenschappen(1, 'elektrisch', 'Emmen', 99 , 'Oosterstraat', 250);//create object
        $huis->setToilet('Ja');
        $huis->setkamer(8);
        $huis->setWoz(2000, 8, 'Emmen');

        echo "<table>";
          echo "<tr>";
            echo 'Aantal kamers: ' .$huis->getKamer(). '<br />';
            echo 'Aantal toiletten: ' .$huis->getToilet(). '<br />';
            echo 'Kachel: ' .$huis->getKachel(). '<br />';
            echo 'Soort kachel: ' .$huis->getSoortKachel(). '<br />';
            echo 'Huisnummer: ' .$huis->getHuisNum(). '<br />';
            echo 'Straatnaam: ' .$huis->getStraatnaam(). '<br />';
            echo 'Plaats: ' .$huis->getPlaats(). '<br />';
            echo 'Vierkante meter: ' .$huis->getvMeter(). 'm²<br />';
            echo 'WOZ waarde: €' .$huis->getWoz(). ',00';
          echo "</tr>";
        echo "</table>";
    ?>
  </body>
</html>

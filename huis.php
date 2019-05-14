<?php
/*huis class*/
class Huis{
    public $kamer;
    public $toilet;
    public $kachel;
    public $soortKachel;
    public $huisNum;
    public $straatnaam;
    public $plaats;
    public $vMeter;
    public $woz;

    public function __construct($kamer, $toilet, $kachel, $soortKachel, $plaats, $huisNum, $straatnaam, $vMeter, $woz){

      switch ($kamer) {
        case 1:
            $woz = $woz + 100;
            break;
        case 2:
            $woz = $woz + 300;
            break;
        default:
        $woz = $woz +  800;
      }
      $this->_kamer = $kamer;
      $this->_toilet = $toilet;
      $this->_kachel = $kachel;
      $this->_soortKachel = $soortKachel;
      $this->_huisNum = $huisNum;
      $this->_straatnaam = $straatnaam;
      $this->_vMeter = $vMeter;
        switch ($plaats) {
          case 'Amsterdam':
                $woz = $woz + 1000;
              break;
          case 'Rotterdam':
              $woz = $woz + 1000;
              break;
          case 'Groningen':
              $woz = $woz + 1000;
              break;
          default:
            ;
        }
      $this->_plaats = $plaats;
      $this->_woz = $woz;
    }

    public function getKamer() {
        return $this->_kamer;
    }
    public function getToilet() {
      return $this->_toilet;
    }
    public function getKachel() {
      return $this->_kachel;
    }
    public function getSoortKachel() {
      return $this->_soortKachel;
    }
    public function getHuisNum() {
      return $this->_huisNum;
    }
    public function getStraatnaam() {
      return $this->_straatnaam;
    }
    public function getPlaats() {
      return $this->_plaats;
    }
    public function getvMeter() {
      return $this->_vMeter;
    }
    public function getWoz() {
      return $this->_woz;
    }
}

$huis = new Huis(8, 1, 'Ja', 'elektrisch', 'Emmen', 99 , 'Oosterstraat', 250, 0);//create object

echo 'Aantal kamers: ' .$huis->getKamer(). '<br />';
echo 'Aantal toiletten: ' .$huis->getToilet(). '<br />';
echo 'Kachel: ' .$huis->getKachel(). '<br />';
echo 'Soort kachel: ' .$huis->getSoortKachel(). '<br />';
echo 'Het huisnummer: ' .$huis->getHuisNum(). '<br />';
echo 'Straatnaam: ' .$huis->getStraatnaam(). '<br />';
echo 'Plaats: ' .$huis->getPlaats(). '<br />';
echo 'Vierkante meter: ' .$huis->getvMeter(). 'm²<br />';
echo 'WOZ waarde: ' .$huis->getWoz(). '';

/*select box?*/
?>

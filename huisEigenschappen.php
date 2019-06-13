<?php
/*huis class*/
class HuisEigenschappen{
    private $kamer;
    private $toilet;
    private $kachel;
    private $soortKachel;
    private $huisNum;
    private $straatnaam;
    private $plaats;
    private $vMeter;
    private $woz;

    public function __construct($kachel, $soortKachel, $plaats, $huisNum, $straatnaam, $vMeter){
      //een hele grote constructor
      $this->kachel = $kachel;
      $this->soortKachel = $soortKachel;
      $this->huisNum = $huisNum;
      $this->straatnaam = $straatnaam;
      $this->vMeter = $vMeter;
      $this->plaats = $plaats;
    }

    public function setKamer($kamer){//getter and setter kamer
  		$this->kamer = $kamer;
  	}
    public function getKamer() {
        return $this->kamer;
    }
    public function setToilet($toilet){//getter and setter toilet
  		$this->toilet = $toilet;
  	}
    public function getToilet() {
      return $this->toilet;
    }
    public function getKachel() {
      return $this->kachel;
    }
    public function getSoortKachel() {
      return $this->soortKachel;
    }
    public function getHuisNum() {
      return $this->huisNum;
    }
    public function getStraatnaam() {
      return $this->straatnaam;
    }
    public function getPlaats() {
      return $this->plaats;
    }

    public function getvMeter() {
      return $this->vMeter;
    }
    public function getWoz() {
      return $this->woz;
    }
    public function setWoz($woz, $kamer, $plaats) {
      //functie calculate the WOZ waarde
      if($kamer == 1)
      {
        $woz = $woz + 100;
      }else if($kamer == 2)
      {
          $woz = $woz + 300;
      }else
      {
        $woz = $woz + 800;
      }

      if($plaats == 'Amsterdam' || $plaats == 'Rotterdam' || $plaats == 'Amsterdam'){
          $woz = $woz + 800;
      }
        return $this->woz = $woz;

    }

}
?>

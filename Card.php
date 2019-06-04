<?php

class Card {
  private $number;
  private $open = true;
  private $found = false;

  public function isFound() {
		return $found;
	}

	public function setFound($found) {
		$this->found = $found;
		//this.setBackground($this->color);
	}

	public function setOpen($open) {
		$this->open = $open;
      if($open){
        echo $number;
      }
		//this.setContentAreaFilled(open);
		//System.out.print(open + " ");
		//if(open) {
		//this.setBackground(this.color);

		//this.repaint();
	}

	public function getOpen() {
		return $this->open;
	}

  public function toHtml(){//kind of a toString object (denk aan java, waar hij zit)
    return $this->number;
  }

  function __construct($number){
    $this->number = $number;
  }

}
?>

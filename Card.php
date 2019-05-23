<?php

class Card {
  private $number;
  private $open = false;
  private $found = false;

  public function isFound() {//Boolean type return!!
		return $found;
	}

	public function setFound($found) {
		$this->found = $found;
		//this.setBackground($this->color);
	}

	public function setOpen($open) {
		$this->open = $open;
		//this.setContentAreaFilled(open);
		//System.out.print(open + " ");
		//if(open) {
		//this.setBackground(this.color);

		//this.repaint();
	}

	public function getOpen() {
		return $this->open;
	}

  function __construct($number){
    $this->number = $number;
  }

}
?>

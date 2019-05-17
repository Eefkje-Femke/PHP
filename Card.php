<?php

class Card {
  private $number;
  private $open = false;
  private $found = false;

  public isFound() {
		return $found;
	}

	public void setFound($found) {
		$this->found = $found;
		//this.setBackground($this->color);
	}

	public void setOpen($open) {
		$this->open = $open;
		//this.setContentAreaFilled(open);
		//System.out.print(open + " ");
		//if(open) {
		//this.setBackground(this.color);

		//this.repaint();
	}

	public getOpen() {
		return $this->open;
	}

  function __construct($number){
    $this->number = $number;
  }

}
?>

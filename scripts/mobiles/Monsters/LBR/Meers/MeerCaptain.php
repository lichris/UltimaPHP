<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class MeerCaptain extends Mobile {
	public function summon() {
		$this->name = "a meer captain";
		$this->body = 773;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(96, 110);
		$this->dex = rand(186, 200);
		$this->int = rand(96, 110);
		$this->maxhits = rand(58, 66);
		$this->hits = $this->maxhits;
		$this->damage = 5;
		$this->damageMax = 15;
		$this->resist_physical = rand(45, 55);
		$this->resist_fire = rand(10, 20);
		$this->resist_cold = rand(40, 50);
		$this->resist_poison = rand(35, 45);
		$this->resist_energy = rand(35, 45);
		$this->karma = 5000;
		$this->fame = 2000;
		$this->virtualarmor = 28;

}}
?>

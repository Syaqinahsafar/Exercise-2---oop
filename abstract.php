<?php

class Student {

	private $matric_num;

	public function id_num() {

		// int
	}

	public function setMatricNum($matric_num) {
		$this->matric_num = $matric_num;
	}
}

class ArtificialIntelligence extends Student {
	public function id_num() {
		//robotics
	}
}

class Networking extends Student {
	public function id_num() {
		//wire
	}
}

$a_i = new ArtificialIntelligence();
$a_i->id_num();
 
<?php

class Student {
	private $name, $age, $matric_num;

	public function _construct( $name, $age, $matric_num) {

		$this->name = $name;
		$this->age = $age;
		$this->matric_num = $matric_num;
	}

	public function getName() {
		return $this->name;
	}	

}

$stdnt = new Student ('SyaiqnahSafar', 22, 50135135);

echo $stdnt->getName();

?>
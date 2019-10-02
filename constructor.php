<?php

class Student {

	public $name,

	public $age,

	public $matric_num,

	public $faculty;


	public function _construct( $name = "name", $age = "age", $matric_num = "matric number", $faculty = "faculty") {

		$this->name = $name;
		$this->age = $age;
		$this->matric_num = $matric_num;
		$this->faculty = $faculty;

	}

	public function getInfo() {
		return "$this->name, $this->matric_num";
	}


}
<?php

class Student {

	public $name, $age, $matric_num, $faculty;

	public function marks() {
		return "Marks of student examination";
	} 
}

class Subject extends Student {

	public $neural_network = false;


	public function artificialIntelligence() {
		$this->neural_network = true;

		return "Major in AI";
	}
}

$Student1 = new Subject();

echo $Student1->marks();
echo "<br>";
echo $Student1->artificialIntelligence();

?>
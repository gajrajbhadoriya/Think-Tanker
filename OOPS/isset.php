<?php 

class abc{
	public $course;
	private $first_name;
	private $last_name;

	public function setName($fname,$lname){
		$this->first_name = $fname;
		$this->last_name = $lname;
	}

	public function __isset($property){

		echo isset($this->$property);
	}
}

$test = new abc();
$test->setName("Meet","Patel");
echo isset($test->first_name);
?>
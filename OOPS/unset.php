<?php 

class abc{
	public $course = "PHP";
	private $first_name;
	private $last_name;

	public function setName($fname,$lname){
		$this->first_name = $fname;
		$this->last_name = $lname;
	}
	public function __unset($property){

		 unset($this->$property);
	}
	
}

$test = new abc();
$test->setName("Meet","Patel");

unset($test->last_name);
echo "<pre>";
print_r($test);
?>
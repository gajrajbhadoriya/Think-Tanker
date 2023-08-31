<?php 

class abc{
	private $name;
	
	public function hello(){
		echo $this->name;
	}

	public function __get($property){
		echo "Error($property')<br>";
	}

	public function __set($property,$value){
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}else{
			echo "property not exist :  $property";
		}
	}
}

$test = new abc();
$test->name = "Meet Patel";

$test->hello();
?>
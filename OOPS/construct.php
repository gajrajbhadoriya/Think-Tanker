<?php 

class person{

	public $name;
	public $age;

	function __construct($name ="no name", $age=0){
	
		$this->name = $name;
		$this->age = $age;

	}

	function show(){
		echo $this->name . " - " . $this->age . "<br>";
	}
}

$p1 = new person();
$p2 = new person("Meet Patel",21);
$p3 = new person("jay Patel",18);

// $p1->name = "Meet Patel";
// $p1->age = 21;

$p1->show();
$p2->show();
$p3->show();
?>
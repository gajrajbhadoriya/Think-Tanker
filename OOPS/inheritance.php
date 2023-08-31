<?php 

class employee{

	public $name;
	public $age;
	public $salary;

	function __construct($name ="no name", $age=0 ,$salary = 0){
	
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;

	}

	function show(){

		echo "<h2>Employee Profile</h2>";
		echo "Employee Name : " . $this->name . "<br>";
		echo "Employee Age : " . $this->age . "<br>";
		echo "Employee Salary : " . $this->salary . "<br>";
	}
}

class manager extends employee{
	public $ta=2000;
	public $phone=300;
	public $totalSalary;
	

	function show(){

		$this->totalSalary = $this->salary + $this->ta +$this->phone;
		echo "<h2>Manager Profile</h2>";
		echo "Employee Name : " . $this->name . "<br>";
		echo "Employee Age : " . $this->age . "<br>";
		echo "Employee Salary : " . $this->totalSalary . "<br>";
	}
}
$e1 = new employee("Meet",21,15000);
$e2 = new manager("jay",21,15000);
$e1->show();
$e2->show();
?>
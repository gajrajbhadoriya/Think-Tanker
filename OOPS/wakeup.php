<?php 

// class abc{
// 	public $course= "PHP";
// 	private $first_name;
// 	private $last_name;

// 	public function setName($fname,$lname){
// 		$this->first_name = $fname;
// 		$this->last_name = $lname;
// 	}

// 	public function __sleep(){

// 		return array('first_name','last_name');
// 	}

// 	public function __wakeup(){

// 		return array('first_name','last_name');
// 	}
// }

// $test = new abc();
// $test->setName("Meet","Patel");
// $srl = serialize($test);

// $us =  unserialize($srl);
// echo "<pre>";
// print_r($us);
class AA {
public function output($args) {
echo "\n Parent - the parameter value is $args";
}
}
class BB extends AA {
public function output($args) {
echo "\n Child - the parameter value is $args";
}
}
$obj1 = new AA;
$obj2 = new BB;
$obj1->output('class AA');
$obj2->output('class BB');
?>





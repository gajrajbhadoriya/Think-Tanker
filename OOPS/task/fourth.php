<?php 

abstract class bank {

	public $bank;
	public $intrest;
	public $time;

	abstract public function find_intrest($bank,$intrest,$time);
}

class sbi extends bank{
	public function find_intrest($bank,$intrest,$time){
		echo "This is SBI intrest ".$bank * $time * $intrest/100 . "<br>";
	}
}

class bob extends bank{
	public function find_intrest($bank,$intrest,$time){
		echo "This is BOB intrest ". $bank * $time * $intrest/100 . "<br>";
	}
}

class hdfc extends bank{
	public function find_intrest($bank,$intrest,$time){
		echo "This is HDFC intrest ". $bank * $time * $intrest/100 . "<br>";
	}
}
$a = new sbi();
$a->find_intrest(5000,2,2);

$b = new bob();
$b->find_intrest(10000,4,3);

$c = new hdfc();
$c->find_intrest(15000,6,4);
?>
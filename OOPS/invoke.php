<?php 

class calculation{
	public $a,$b;

	function __construct($a,$b){
		$this->a = $a;
		$this->b = $b;
	}

	function sum(){
		echo  $this->a + $this->b;
		
	}

	function __invoke(){
		echo  $this->a + $this->b;
	}

}
$obj = new calculation(20,30);

$obj();

?>
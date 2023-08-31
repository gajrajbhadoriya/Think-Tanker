<?php 

class car {

	public $c_name;
	public $c_name1;
	function __construct(){

		$this->show_data();
	}
	public function show_data(){

		$this->c_name = 'abc';
		$this->c_name1 = 'def';
	}	
}
class price extends car{

	public $c_price;
	function __construct(){

		$this->show_data1();
	}
	public function show_data1(){

		$this->c_price = '12122121';
		$this->c_price1 = '12311111';
	}
}

class merge extends price{

	function __construct(){
		car::__construct();
		price::__construct();
		
	}

	function get_data2(){
		
		echo $this->c_name;
		echo $this->c_price. "<br>";
		echo $this->c_name1 ;
		echo $this->c_price1. "<br>";
		
	}
}

$b1 = new merge();
$b1->get_data2();

?>
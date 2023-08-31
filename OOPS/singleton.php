<?php 

class basket{

	public static $instance;
	
	public function __construct($key,$value)
	{
		$this->$key = $value;
	}
	public static function getInstance($key,$value){

		if (!self::$instance)
			self::$instance = new static($key,$value);
			self::$instance = new static($key,$value);
		return self::$instance;
		
	}
	public function set(){
		
	
		// return $this->key;
		// return $this->value;
	}
	// public function get($key){
	// 	return $this->$key;
	// }
}

$a = basket::getInstance('meet','sdvsd');
$a->set();
$b = basket::getInstance('asdc','meet');
$b->set();
$c = basket::getInstance('ashcfuwe','sajfdiw');
$c->set();
// $a->set('vivek','patel');
// echo "<br>";
echo "<pre>";
print_r($a);
print_r($b);
print_r($c);

// $b = basket::getInstance();
// $b->set('deepak','mandali');
// echo "<br>";
// print_r($b);
?>
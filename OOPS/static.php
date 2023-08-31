<?php 

class base {

	public static $name = "Meet ";



	public static function show(){
		echo static::$name;
	}

	// public function __construct($n){
	// 	self::$name = $n;
	// }
}
class derived extends base {
	public static $name = " Patel";

}
$test = new derived();

$test->show();
?>
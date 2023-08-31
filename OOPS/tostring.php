<?php 

class abc{

	public function __toString(){
		return "Hey How r u ?" . get_class($this);
	}
}

$test = new abc();
echo $test;	
?>
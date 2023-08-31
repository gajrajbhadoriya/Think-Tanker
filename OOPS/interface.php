<?php

interface parent1{

	function calc($a,$b);
}

interface parent2{

	function sub($c,$d);
}

class childClass implements parent1,parent2{
	public function calc($a,$b){
		echo $a + $b . "\n";
	}
	public function sub($c,$d){
		echo $c - $d . "\n";
	}
}

$test = new childclass();

$test->calc(20,25);

$test->sub(40,30);
?>
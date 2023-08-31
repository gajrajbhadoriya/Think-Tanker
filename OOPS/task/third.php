<?php 

class first{
	
	public function get_age($age) {

		return "This is first's class age" . $age . "<br>";
	}
}
class second extends first{

	public function get_age($age) {
		return "This is second's class age" .$age . "<br>";
	}
}
class third extends second{

	public function get_age($age) {
		return "This is third's class age" .$age . "<br>";
	}
}
$m = new first();
echo $m->get_age(21);

$b = new second();
echo $b->get_age(22);

$d = new third();
echo $d->get_age(23);
?>
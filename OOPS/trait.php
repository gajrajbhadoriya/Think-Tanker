<?php 

	// trait hey{

	// 	public function meet(){
	// 		echo "Hey Meet Patel";
	// 	}
	// }

	// class base{
	// 	use hey;
	// }

	// $test = new base();
	// $test->meet();
	
	trait hey{

		public function meet(){
			echo "Hey Meet Patel <br>";
		}
	}
	trait hi{

		public function meet(){
			echo "Hi Meet Patel ";
		}
	}

	class base{
		use hey,hi{
			hey::meet insteadof hi;
			hi::meet as newmeet;
		}
	}

	$test = new base();
	$test->meet();
	$test->newmeet();
?>
<?php 

	class abc{

		public function meet(){
			echo "this is first function <br>";
			return $this;
		}
		public function meet1(){
			echo "this is second function <br>";
			return $this;
		}
		public function meet2(){
			echo "this is third function <br>";
			// return $this;
		}
	}
$test = new abc();
$test->meet()->meet1()->meet2();
?>
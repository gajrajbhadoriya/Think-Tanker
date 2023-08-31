<?php 

	// class hello{
	// 	public function hey(){
	// 		echo "Hey Meet Patel";
	// 	}
	// }
	
	// class by{
	// 	public function by(){
	// 		echo "by Meet Patel";
	// 	}
	// }

	// function wow(hello $c){
	// 	$c->hey();
	// }

	// $test= new hello();
	// wow($test);

	class school{
		public function getNames(student $names){
			foreach ($names ->names() as $name) {
				echo $name."<br>";
			}
		}
	}
	
	class student{
		public function names(){
			return 	["Meet","Jay","Krishna"];
		}
	}
	class hey{
		
	}
	// $stu = new hey();
	$stu = new student();
	$sch = new school();

	$sch->getNames($stu);

?>
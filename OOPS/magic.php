<?php 

// echo  "Hello " . __LINE__ ."<br>";
// echo  "Hello " . __LINE__;

// echo "Hello " . __DIR__;
// echo "Hello " . __FILE__;


function meet(){
	echo "Hello" . __function__;
}

meet();
?>
<?php 

class book{

	public $b_name;
	public $b_author;

	public function __construct($name,$author){
		$this->b_name = $name;
		$this->b_author = $author;
	}
	public function getName(){
		return $this->b_name . ' - ' . $this->b_author . '<br>';
	}
}

class bookfactory{
	 public static function create($name,$author){
	 	return new book ($name,$author);
	 }
}


$book =  bookfactory::create('Meet','patel');

echo $book->getName();
?>
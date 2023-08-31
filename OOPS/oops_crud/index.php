<?php 

include 'database.php';

$obj = new database();

// $obj->insert('students',['sname'=>'Meet Patel','sage'=>22,'scity'=>'ahm']); // for insert

//$obj->update('students',['sname'=>'meet Patel','sage'=>20,'scity'=>'ahm'],'id="13"'); //for update

// $obj->delete('students','id="13"');// for delete

// $obj->sql('SELECT * FROM students');
// echo "<pre>";
// print_r($obj->getResult());

$obj->select('students','*',null,null,null,3);
echo "<pre>";
print_r($obj->getResult());

$obj->pagination('students',null,null,3);
?>
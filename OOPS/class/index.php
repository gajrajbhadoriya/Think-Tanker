<?php 

spl_autoload_register(function ($class) {
    include  $class . '.php';
});

$test = new first();
$test1 = new second();

?>
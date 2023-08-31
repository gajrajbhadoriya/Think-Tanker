<?php
class Fruit {
  public $name;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$m = new Fruit("watermelon");
$a = new Fruit("asdcas");
$m->get_name();
$a->get_name();
print_r($m);
print_r($a);
?>
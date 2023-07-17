<?php

class First
{
    public $num;

    public function firstSum(&$num)
    {
        $num += 5;
    }
}

$value = 10;
$first = new First();
$first->firstSum($value);
echo $value;

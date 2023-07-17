<?php

class Variable
{
    public $x = 10 ;
    public $y = 10;

    public function test()
    {
        global $x , $y ;
        $x = $x + $y;
    }
}

$variable = new Variable();
$variable->test();
echo $x;


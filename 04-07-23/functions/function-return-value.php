<?php

class Main
{
    public $insertFirstValue ;
    public $insertSecondValue ;
    public function sum($insertFirstValue, $insertSecondValue)
    {
        $insertFirstValue + $insertSecondValue;
    }
} 

$main = new Main();
$returnValue = $main->sum(10,20);
echo $returnValue;

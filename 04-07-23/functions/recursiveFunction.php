<?php

function display($number)
{
    if($number <= 5) {
        echo " $number <br>";
        display($number+1); //recusive function is call herself in function
    }

}

function factorial($n)
{
    if($n == 0) {
        return 1;
    } else {
        return($n * factorial($n - 1));
    }
}

display(1);
echo factorial(5);

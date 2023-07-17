<?php

class Student
{
    public $java ;
    public $python;
    public $laravel;

    public function studentMarks($java, $python, $laravel)
    {
        $sumScore = $java + $python + $laravel ;
        return $sumScore;
    }

    public function percentage($st)
    {
        $studentPer = $st/3;

        echo $studentPer;
    }
}

$student = new Student();
$marks = $student->studentMarks(100, 50, 50);
$student->percentage($marks);



// $totalMarks = studentMarks(65, 50, 85);
// echo "Student total marks is " . $totalMarks;

// percentage($totalMarks);

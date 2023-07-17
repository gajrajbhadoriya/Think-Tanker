<?php
require '../vendor/autoload.php'; 

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();


$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Hello');
$sheet->setCellValue('B1', 'World!');
$sheet->setCellValue('A2', 'great!');

$writer = new Xlsx($spreadsheet);   
$writer->save('example.xlsx');

<?php

$con = mysqli_connect("localhost", "root", "", "swatantra");
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

if(isset($_POST['export-btn'])) {
    $ext        = $_POST['export_file_type'];
    $fileName   = "user-sheet-".time();

    $query = "SELECT * FROM user";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0) {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'CATEGORY');
        $sheet->setCellValue('C1', 'EMAIL');
        $sheet->setCellValue('D1', 'FIRSTNAME');

        $rowCount = 2;
        foreach($query_run as $data) {
            $sheet->setCellValue('A' . $rowCount, $data['id']);
            $sheet->setCellValue('B' . $rowCount, $data['category']);
            $sheet->setCellValue('C' . $rowCount, $data['email']);
            $sheet->setCellValue('D' . $rowCount, $data['firstname']);
            $rowCount++;
        }

        if($ext == 'xlsx'){
            $writer = new Xlsx($spreadsheet);
            $finalName = $fileName.'.xlsx';
        }
        elseif($ext == 'xls'){
            $writer = new Xls($spreadsheet);
            $finalName = $fileName.'.xls';
        }
        elseif($ext == 'csv'){
            $writer = new Csv($spreadsheet);
            $finalName = $fileName.'.csv';
        }
        
        // $writer->save($finalName);
        header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
        header('content-disposition: attachment;filename="' . urlencode($finalName). '"');
        $writer->save('php://output');
    } else {
        echo "NO record found to export";
        header("location: index.php");
    }
}

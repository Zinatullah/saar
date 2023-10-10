<?php

include("./../../../db/connection.php");
include("./../../../db/functions.php");
require '../../../vendor/autoload.php';

$query = "SELECT * FROM daily_form ";
$result = $con->query($query);

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$worksheet = $spreadsheet->getActiveSheet();

// $sheet = $spreadsheet->getActiveSheet();

$columnHeaders = ['آیډي', 'د داخلی شرکت نوم', 'قرارداد', 'منبع هېواد', 'نوعیت', 'مارکه', 'مقدار', 'قیمت', 'د ګمرک قیمت', 'د ډالر نرخ', 'د تېلو نرخ', 'د ګاز نرخ', '۱۵ ورځنی قیمت', 'مقدار', 'د ګمرک قیمت', 'ترانزیت', 'مالیات', 'فیسونه', 'د ترانسپورت فیس', 'خدمات', 'د جنس په اساس', 'په افغانۍ', 'په ډالر', 'وخت'];
$worksheet->fromArray($columnHeaders, null, 'A1');

$row = 2;
while ($row_data = $result->fetch_assoc()) {
    $column = 'A';
    foreach ($row_data as $value) {
        $worksheet->setCellValue($column . $row, $value);
        $column++;
    }
    $row++;
}

$writer = new Xlsx($spreadsheet);
$min = 1; // Minimum value
$max = 100000; // Maximum value

$randomNumber = rand($min, $max);
$filename = 'ورځنۍ فورمې.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'. $filename );
header('Cache-Control: max-age=0');
// $writer->save($path);
$writer->save('php://output');

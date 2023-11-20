<?php

namespace App\Http\Controllers;
use App\Mail\ExcelAttachmentEmail;
use App\Models\Stagiaire;
use App\Models\Stage;
use App\Models\Absence;
use Illuminate\Support\Facades\Mail;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class DatabaseController extends Controller
{
   
    public function saveToExcel()
    {
         // Retrieve data
    $stagiaires = Stagiaire::all()->toArray();
    $stages = Stage::all()->toArray();
    $absences = Absence::all()->toArray();

    // Create Excel file
    $spreadsheet = new Spreadsheet();
    $spreadsheet->getActiveSheet()->setTitle('Stagiaires');
    $spreadsheet->getActiveSheet()->fromArray($stagiaires, null, 'A1');

    $spreadsheet->createSheet();
    $spreadsheet->setActiveSheetIndex(1);
    $spreadsheet->getActiveSheet()->setTitle('Stages');
    $spreadsheet->getActiveSheet()->fromArray($stages, null, 'A1');

    $spreadsheet->createSheet();
    $spreadsheet->setActiveSheetIndex(2);
    $spreadsheet->getActiveSheet()->setTitle('Absences');
    $spreadsheet->getActiveSheet()->fromArray($absences, null, 'A1');

    $filename = 'combined_data.xlsx';
    $filePath = storage_path('app/' . $filename);

    $writer = new Xlsx($spreadsheet);
    $writer->save($filePath);

    // Send email with attachment
    Mail::to('errazy.abdelfatah@gmail.com')->send(new ExcelAttachmentEmail());

    return back()->with('success','les donne sauvgarder avec success');
    

    }


}

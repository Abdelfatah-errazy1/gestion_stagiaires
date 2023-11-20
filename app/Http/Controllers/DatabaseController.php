<?php

namespace App\Http\Controllers;
use App\Imports\AbsenceImport;
use App\Imports\StageImport;
use App\Imports\StagiaireImport;
use App\Mail\ExcelAttachmentEmail;
use App\Models\Absence;
use App\Models\Stage;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
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

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);
    

        $file = $request->file('file');
        // dd($file);
    
        try {
            Excel::import(new StagiaireImport(), $file, 'Stagiaires');

            // Import Stages sheet
            Excel::import(new StageImport(), $file, 'Stages');
    
            // Import Absences sheet
            Excel::import(new AbsenceImport(), $file, 'Absences');
            return "Data imported successfully.";
        } catch (\Exception $e) {
            return "Error importing data: " . $e->getMessage();
        }
    }
}

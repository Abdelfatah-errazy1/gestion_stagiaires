<?php

namespace App\Http\Controllers;
use App\Exports\AllTablesExport;
use App\Imports\AllTablesImport;
use App\Mail\DatabaseExportMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;

class DatabaseController extends Controller
{
    public function exportAndMail()
    {
        // Export database to Excel
        $export = new AllTablesExport();
        $filePath = storage_path('exports/database_backup.xlsx');
        Excel::store($export, 'database_backup.xlsx');

        

        // Send the exported file via email
        Mail::to('errazy.abdelfatah@gmail.com')->send(new DatabaseExportMail($filePath));

        return "Exported database and sent the file via email!";
    }


}

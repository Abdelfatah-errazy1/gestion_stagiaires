<?php

namespace App\Exports;

use App\Models\Stage;
use Maatwebsite\Excel\Concerns\FromCollection;

class StageExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Stage::all();
    }
}

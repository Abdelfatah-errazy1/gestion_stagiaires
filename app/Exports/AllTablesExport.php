<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class AllTablesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(): Collection
    {
        return User::all();
    }
}

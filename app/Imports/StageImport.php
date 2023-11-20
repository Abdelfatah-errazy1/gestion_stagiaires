<?php

namespace App\Imports;

use App\Models\Stage;
use Maatwebsite\Excel\Concerns\ToModel;

class StageImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        dd($row);
        return new Stage([
            'Cin' => $row['Cin'],
            // Map other fields as needed
            'Date_D' => $row['Date_D'],
            'Date_F' => $row['Date_F'],
            'Sujet_Stage' => $row['Sujet_Stage'],
            // ... (other fields)
        ]);
    }
}

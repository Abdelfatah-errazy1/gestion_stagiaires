<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExcelAttachmentEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        $filename = 'combined_data.xlsx';
        $filePath = storage_path('app/' . $filename);

        return $this->view('email.excel') // Customize this view or use inline HTML for the email body
                    ->attach($filePath, ['as' => 'combined_data.xlsx', 'mime' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet']);
    }
}


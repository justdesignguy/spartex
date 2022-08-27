<?php

namespace App\Exports;

use App\Models\Newsletter;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NewslettersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Newsletter::select("name", "email")->get();
    }

    public function headings(): array
    {
        return ["Name", "Email"];
    }
}

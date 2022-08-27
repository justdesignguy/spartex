<?php

namespace App\Exports;

use App\Models\ContactRequest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactRequestExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return ContactRequest::select('first_name', 'last_name', 'email', 'mobile_number', 'country', 'how_did_you_hear_about_as', 'message')->get();
    }

    public function headings(): array
    {
        return ["First Name", "Last Name", "Email", "Mobile Number", "Country", "How did you hear about us?", "Message"];
    }
}

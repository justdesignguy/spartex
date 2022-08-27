<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'contact_requests';

    protected $fillable = ['first_name', 'last_name', 'email', 'mobile_number', 'country', 'how_did_you_hear_about_as', 'message'];
}

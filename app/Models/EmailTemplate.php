<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    const IDENTIFIER = [
        'reset_password_mail' => 'Reset Password Mail To Admin',
        'contact_request_thank_you_mail' => 'Contact Request Thank You Mail To User',
        'register_thank_you_mail' => 'Register Thank You Mail To User',
        'contact_request_details_mail_to_admin' => 'Contact Request Details Mail To Admin',
        'register_details_mail_to_admin' => 'Register Details Mail To Admin',
    ];

    protected $primaryKey = 'id';

    protected $table = 'email_templates';

    protected $fillable = ['identifier', 'subject', 'content'];
}

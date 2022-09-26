<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_templates')->truncate();
        $email_templates = [
            [
                'identifier' => 'reset_password_mail',
                'subject' => 'Reset Password',
                'content' => 'Hello #NAME#,<br> Reset Password Link: #URL#'
            ],
            [
                'identifier' => 'register_thank_you_mail',
                'subject' => 'Thanks for Registering on Spartex',
                'content' => 'Hello #NAME#,<br>Thanks for Registering on Spartex'
            ],
            [
                'identifier' => 'contact_request_thank_you_mail',
                'subject' => 'Thanks for Contacting on Spartex',
                'content' => 'Hello #NAME#,<br>Thanks for Contacting on Spartex'
            ],
            [
                'identifier' => 'register_details_mail_to_admin',
                'subject' => 'New User Registered on Spartex',
                'content' => 'Hello Admin,<br>New User Registered on Spartex<br><br>
                            <b>Name: </b> #NAME# <br>
                            <b>Email: </b> #EMAIL# <br>
                            <b>Message: </b> #MESSAGE# <br> For more information click this link #URL#'
            ],
            [
                'identifier' => 'contact_request_details_mail_to_admin',
                'subject' => 'New User has Submitted Contact Request on Spartex',
                'content' => 'Hello Admin,<br>New User has Submitted Contact Request<br><br>
                            <b>Name: </b> #NAME# <br>
                            <b>Email: </b> #EMAIL# <br> For more information click this link #URL#'
            ],
        ];

        DB::table('email_templates')->insert($email_templates);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactRequestDetailMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->markdown('emails.contact_request_details')
            ->subject('New User has Submitted Contact Request on Spartex')
            ->with([
                'url' => ucfirst($this->data['url']),
                'first_name' => ucfirst($this->data['first_name']),
                'email' => ucfirst($this->data['email']),
                'message' => ucfirst($this->data['message']),
            ]);
    }
}

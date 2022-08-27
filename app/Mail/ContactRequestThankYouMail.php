<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactRequestThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->markdown('emails.contact_request_thankyou')
            ->subject('Thanks for Contacting on Spartex')
            ->with([
                'name' => ucfirst($this->data['first_name']),
            ]);
    }
}

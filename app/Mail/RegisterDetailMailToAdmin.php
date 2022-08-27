<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterDetailMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->markdown('emails.register_details')
            ->subject('New User Registered on Spartex')
            ->with([
                'url' => ucfirst($this->data['url']),
                'name' => ucfirst($this->data['name']),
                'email' => ucfirst($this->data['email']),
            ]);
    }
}

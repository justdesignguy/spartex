<?php
/**
 * Created by PhpStorm.
 * User: ombharti
 * Date: 1/2/2018
 * Time: 5:03 PM
 */

namespace App\Services;

use App\Models\EmailTemplate;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    protected $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->from = env('MAIL_FROM_ADDRESS', 'info@learnvern.com');
        $this->from_name = env('MAIL_FROM_NAME', 'Learnvern Team');
        $this->mailer = $mailer;
    }

    public function sendEmailToUser($to, $template = null, $dynamic_data = null)
    {
        $template_variables = Config::get('emailvariables.' . $template);
        $replace_array = $key_array = [];
        if (!empty($template_variables)) {
            foreach ($template_variables as $key => $template_variable) {
                $key_array[] = "#" . $key . "#";
                $replace_array[] = (isset($dynamic_data[trim($key, '#')])) ? $dynamic_data[trim($key, '#')] : '';
            }
        }
        $email_data = EmailTemplate::where('identifier', $template)->first();
        if (isset($email_data)) {
            $subject = str_replace($key_array, $replace_array, $email_data['subject']);
            $content = str_replace($key_array, $replace_array, $email_data->content);
            $content_data = ['email_content' => $content];
            try {
                Mail::send('emailsample', $content_data, function ($message) use ($to, $subject, $template) {
                    $message->from($this->from, $this->from_name)
                        ->to($to)
                        ->subject($subject);
                    $headers = $message->getHeaders();
                    $headers->addTextHeader('X-MC-PreserveRecipients', 'false');
                });
            } catch (\Exception $e) {
                Log::error("Email not sent from the Emails. Returned with error: " . $e->getMessage());
                return $e->getMessage();
            }
        }else{
            Log::warning("Email content not available for template: " . $template);
        }
        return true;
    }
}

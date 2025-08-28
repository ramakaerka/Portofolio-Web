<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    public function build()
    {
        return $this->subject('Pesan Baru dari Contact Form: ' . $this->contactData['subject'])
                    ->view('email_message')
                    ->with([
                        'name' => $this->contactData['name'],
                        'email' => $this->contactData['email'],
                        'company' => $this->contactData['company'] ?? 'N/A',
                        'subject' => $this->contactData['subject'],
                        'message_content' => $this->contactData['message']
                    ]);
    }
}
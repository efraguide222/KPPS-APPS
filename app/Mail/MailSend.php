<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSend extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Get the message.
     */
    public function build()
    {
        return $this->subject('Verifikasi Akun')
                    ->view('mailTemplate');
    }


    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'mailTemplate',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * \Illuminate\Mail\Mailables\Attachment>
     */

}

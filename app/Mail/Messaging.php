<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Messaging extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $firstname;
    public $lastname;
    public $senderEmail;
    public $subject;
    public $email_message;

    public function __construct($senderFirstname, $senderLastname, $senderEmail, $subject, $email_message)
    {
        $this->firstname        = $senderFirstname;
        $this->lastname         = $senderLastname;
        $this->senderEmail      = $senderEmail;
        $this->subject          = $subject;
        $this->email_message    = $email_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->senderEmail)->view('email.email_template');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FacultyEmailVerifyRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $userlink;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userlink)
    {
        $this->userlink=$userlink;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.faculty_email_verify_register');
    }
}

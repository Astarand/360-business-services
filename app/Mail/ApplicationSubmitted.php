<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;


    public $application;
    public $resumeLink;

    /**
     * Create a new message instance.
     */
    public function __construct($application, $resumeLink)
    {
        $this->application = $application;
        $this->resumeLink = $resumeLink;
    }

    public function build()
    {
        return $this->view('emails.application_submitted')
                ->with([
                    'application' => $this->application,
                    'resumeLink' => $this->resumeLink,
                ]);
    }

    
}

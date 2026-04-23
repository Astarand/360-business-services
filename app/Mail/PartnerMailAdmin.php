<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PartnerMailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $state;
    public $city;
    public $fileLink;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $email
     * @param string $phone
     * @param string $state
     * @param string $city
     * @param string $fileLink
     * @param string $subject
     */
    public function __construct(string $name, string $email, string $phone, string $state, string $city, string $fileLink, string $subject)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->state = $state;
        $this->city = $city;
        $this->fileLink = $fileLink;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
            ->view('emails.partnerMailAdmin');
    }
}




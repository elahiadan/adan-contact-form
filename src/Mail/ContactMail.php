<?php

namespace Adan\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mail Testing',
        );
    }
    public function content(): Content
    {
        return new Content(
            view: 'adan::emails.contact',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

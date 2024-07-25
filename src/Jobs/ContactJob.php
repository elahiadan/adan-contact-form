<?php

namespace Adan\Contact\Jobs;

use Adan\Contact\Mail\ContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ContactJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function handle(): void
    {
        Mail::to(config('SENDER_CONTACT_MAIL'))->queue(new ContactMail($this->data));
    }
}

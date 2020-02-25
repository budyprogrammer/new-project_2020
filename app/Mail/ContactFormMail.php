<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
      use Queueable, SerializesModels;

    public $emails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         // $message = $this->message;
        return $this->subject('new contact mail')
                 ->from('me@gmail.com')
                 ->to('test@gmail.com')   
                ->view('products.contact');
        // return $this->markdown('emails.contact.contact-form');
    }
}

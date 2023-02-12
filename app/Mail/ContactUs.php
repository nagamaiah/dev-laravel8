<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    //public array $data; // Used constructor property promotion here...
    //public \stdClass $data;
    //public object $data;

    /**
     * Create a new message instance.
     *
     * @param \stdClass $data
     * @return void
     */
    public function __construct(public \stdClass $data)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com', 'Example')
                    ->subject('Customer support')
                    ->markdown('emailTemplates.contact');
    }
}

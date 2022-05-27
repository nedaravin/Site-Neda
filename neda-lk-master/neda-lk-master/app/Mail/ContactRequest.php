<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The ContactRequest instance.
     *
     * @var ContactRequest
     */
    private $contact;

    /**
     * Create a new message instance.
     *
     * @param array $contact
     */
    public function __construct(array $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $email = $this
            ->from($this->contact['email'], $this->contact['name'])
            ->to(config('mail.to.email'), config('mail.to.name'));

        if (isset($this->contact['cc']) && is_array($this->contact['cc'])) {

            foreach ($this->contact['cc'] as $cc) {
                
                $email->cc($cc['email'], $cc['name']);
            }
        }

        return $email->subject($this->contact['email_subject'])
            ->with(['date' => $this->contact])
            ->markdown('email.contact_request');
    }
}

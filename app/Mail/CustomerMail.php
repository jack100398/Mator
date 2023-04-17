<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class CustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    protected array $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sales@new-motech.com')
            ->subject($this->data['title'])
            ->view('Mails.CustomerMail')
            ->with([
                'data' => $this->data
            ]);
    }
}

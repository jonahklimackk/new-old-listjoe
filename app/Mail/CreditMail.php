<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreditMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sender;
    public $recipient;
    public $mailing;
    public $topEmailAd;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailing, $sender, $recipient, $topEmailAd)
    {
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->mailing = $mailing;
        $this->topEmailAd = $topEmailAd;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.credit-mail')->subject($this->mailing->subject);
    }
}

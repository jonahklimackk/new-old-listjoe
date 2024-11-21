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
    public $creditsUrl;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailing, $sender, $recipient, $creditsUrl, $topEmailAd= null)
    {
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->mailing = $mailing;
        $this->creditsUrl = $creditsUrl;
        $this->topEmailAd = $topEmailAd;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

         return $this->view('emails.credit-mail');

    }
}

<?php

namespace App\Jobs;

use Mail;
use App\Models\User;
use App\Mail\TestMail;
use App\Mail\CreditMail;
use App\Models\TopEmailAd;
use Illuminate\Bus\Queueable;
use App\Mail\MailingCompleted;
use App\Helpers\BuildsCreditsUrl;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendsMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $sender;
    public $mailing;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($sender, $mailing)
    {
        $this->sender = $sender;
        $this->mailing = $mailing;
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $recipients = User::get()->random($this->mailing->recipients)->all();
        // dd($recipients);

        foreach ($recipients as $recipient)
        {
            dump('in for eadch recipient');

            //create the credits url and store it in db
            $creditsUrl = BuildsCreditsUrl::build($this->sender,$recipient,$this->mailing);


            //enable personalization
            $this->mailing->subject = str_replace("[FIRST_NAME]", $recipient->name , $this->mailing->subject);
            $this->mailing->body = str_replace("[FIRST_NAME]", $recipient->name , $this->mailing->body);


            //top Email Ad in free members' email
            if ($this->sender->membership == 'free'){

                dump('for free uesr');
                $topEmailAd = TopEmailAd::get()->random(1)->first();
                Mail::to($recipient)->send(new CreditMail($this->mailing, $this->sender, $recipient, $creditsUrl, $topEmailAd));
            }
            else  {
                dump('in mail for pro users');
                Mail::to($recipient)->send(new CreditMail($this->mailing, $this->sender, $recipient, $creditsUrl));
            }
        }


        //set mailing to sent - but not during testing
        $this->mailing->status = "sent";
        $this->mailing->save();

        if ($this->mailing->solo)
            $this->sender->solo_tokens -= 1;
        else 
            $this->sender->credits -= $this->mailing->credits;
        $this->sender->save();

        //send an email notifying the sender of a completed mailing
        Mail::to($this->sender)->send(new MailingCompleted($this->sender,count($recipients)));

    }
}
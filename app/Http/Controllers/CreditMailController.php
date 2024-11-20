<?php

namespace App\Http\Controllers;

use Auth;

use App\Jobs\SendsMail;
use App\Models\User;
use App\Models\Logins;
use App\Models\Mailing;
use App\Models\TopEmailAd;
use Illuminate\Http\Request;
use App\Helpers\BuildsCreditsUrl;

class CreditMailController extends Controller
{

    /**
    * show a sample html email 
    * credit mail in the browser
    * for testing purpose
    *
    * @return void
    */
    public function showCreditMail()
    {

        $sender = Auth::user();

        $topEmailAd = TopEmailAd::where('user_id', '!=', Auth::user()->id)->get()->random(1)->all();

        $mailing = Mailing::where('user_id', Auth::user()->id)->get()->first();

        $recipient = User::get()->random(1)->first();
        // because I can't get the eloquent relationship right
        $recipientLogin = Logins::where('user_id', $recipient->id)->get()->sortByDesc('updated_at')->first();

        //create the credits url
        $creditsUrl = BuildsCreditsUrl::build($sender,$recipient);

        return View('emails.credit-mail',compact('sender','topEmailAd', 'mailing', 'recipient', 'recipientLogin', 'creditsUrl'));
    }






    /**
    * do a mailing, this would be
    * cron what a job does     
    *
    * @return void
    */
    public function dispatchCreditMail()
    {

        //find first paid user in DB with mailing queued
        $queuedMailings = Mailing::where('status', 'queued')->orderBy('created_at', 'asc')->get()->all();

        foreach ($queuedMailings as $queuedMailing)
        {
            $sender = User::where('id', $queuedMailing->user_id)->get()->first();
            if ($sender->isUpgraded())
            {
                $nextMailing = $queuedMailing;
                $nextSender = $sender;
                break;
            }
        }
        //no paid users, get next in line user
        if (! isset($nextSender) && ! isset($nextMailing))
        {
            $nextMailing = $queuedMailings[0];
            $nextSender = User::where('id', $queuedMailings[0]->user_id)->get()->first();
        }

        //get # of random recipients = to credits spent
        $totalUsers = User::all()->count();
        $recipientCount = $totalUsers < $nextMailing->credits ? $totalUsers : $nextMailing->credits;

        $recipients = User::get()->random($recipientCount)->all();



        //send it off to the job queue for sending
        dispatch(new SendsMail($nextSender, $nextMailing, $recipients));

    }
}

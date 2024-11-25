<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Mailing;
use App\Models\TopEmailAd;
use App\Models\CreditClicks;
use Illuminate\Http\Request;

class EarnCreditsController extends Controller
{




    /**
    * Show the credits frame to earn credits
    * javscript timer countdown
    *
    * @return View
    */
    public function clickedCreditsMail(string $key)
    {

        $now = Carbon::now();

        $creditClick = CreditClicks::where('key', $key)->get()->first();


        if (is_null($creditClick))
            $message = "We can't find this credit link.";
        //if the difference is more than 14 days , it expired
        else if ($now->timestamp - $creditClick->created_at->timestamp >= 1209600)
        {
            // dump('in clickewdd credits mail');
            $message = 'Your credit click has expired';
        }

        else if ($creditClick->earned_credits == true)
            $message = 'You alreadewy earned '.$creditClick->credits.' credits for this credit link';        
        else
            $message = "Wait for the timer to count down and you'll earn ".$creditClick->credits. " credits";

        
        //record a click for this mailing
        $mailing = Mailing::where('id', $creditClick->mailing_id)->get()->first();
        $mailing->clicks++;
        $mailing->save();

        return View('frames.earn-credits',compact('message','creditClick'));
    }








    /**
    * Show the credits frame to earn credits
    * javscript timer countdown
    *
    * @return View
    */
    public function showTopFrameBeforeCountdown(string $key)

    { 

        dump('in show top before countodwon');
        dump($key);


        $now = New Carbon();
        $setTimer = false;


        $creditClick = CreditClicks::where('key', $key)->get()->first();
                dump($creditClick);
       dump(CreditClicks::all());

       dump(CreditClicks::where('id',1));
       dump(creditClicks::get()->all();

       
        dump($creditClick);

        if (is_null($creditClick)) {
            $message = "We can't find this credit link.";
        }
        else if ($now->timestamp - $creditClick->created_at->timestamp >= 1209600) {
            // dump('showTopFrameBeforeCountdown');
            $message = 'Your credit click link has expired';
        }

        else if ($creditClick->earned_credits == true){
            $message = 'You already earned '.$creditClick->credits.' credits for this credit link';        
        }
        else{
            $setTimer = true;
            $message = "Wait for the timer to count down and you'll earn ".$creditClick->credits. " credits";
        }


        return View('frames.top-frame',compact('creditClick','message','setTimer'));
    }




    /**
    * This gets called after the countdown
    * to crediti the user also we have to
    * check fraudulent clicks and see if it expired
    * that's a lot of stuff for one function
    * 
    * This is all in a top frame, return is a string
    * directly to the usere
    *
    * @param string $key
    * @return string
    */
    public function afterCountdown(string $key)
    {


        $creditClick = CreditClicks::where('key',$key)->get()->first();

        if (!$creditClick->earned_credits) {

            $recipient = User::where('id', $creditClick->recipient_id)->get()->first();
            $recipient->credits += $creditClick->credits;
            $recipient->save();

            $creditClick->earned_credits = true;
            $creditClick->save();

            // return View('frames.top-frame-after-click')->with('message',"You've earned  ".$creditClick->credits." credits.");
            return "You've earned  ".$creditClick->credits." credits.";
        }
        else
            return "You've already clicked this link.";
            // return View('frames.top-frame-after-click')->with ('message','You already clicked this credit link');
        


    }






    /**
    * record a view for the mailing
    *
    * @return View
    */
    public function mailingRecordView(string $key)
    {



        $mailing = Mailing::find((CreditClicks::where("key", $key)->get()->first()->mailing_id));
        $mailing->views++;
        $mailing->save();



        return '/img/spotlights_ads_star.png';
    }



}

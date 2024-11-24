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

        $expired  = new Carbon('14 days ago');
        $now = new Carbon();
        // if ($now - $expired )
        // if now - creditclick date > 14 days
        // then expired

        $creditClick = CreditClicks::where('key', $key)->get()->first();


        if (is_null($creditClick))
            $message = "We can't find this credit link.";

        // else if ($expired > $creditClick->created_at)
        //      $message = "Your credit link has expired.";

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
    * Show the credits frame to earn credits
    * javscript timer countdown
    *
    * @return View
    */
    public function showTopFrameBeforeCountdown(string $key)

    {
        $creditClick = CreditClicks::where('key', $key)->get()->first();

        if (is_null($creditClick))
            $message = "We can't find this credit link.";

        // else if ()
        // if ($expired)
        //     $message = "Your credit link has expired.";

        else if ($creditClick->earned_credits == true)
            $message = 'You already earned '.$creditClick->credits.' credits for this credit link';        
        else
            $message = "Wait for the timer to count down and you'll earn ".$creditClick->credits. " credits";


        return View('frames.top-frame',compact('creditClick','message'));
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




    /**
    * record a view for top email ad
    *
    * @return View
    */
    public function teaRecordView($topEmailAdId)
    {

        $topEmailAd = TopEmailAd::find($topEmailAdId);
        if ($topEmailAd){
            $topEmailAd->views++;
            $topEmailAd->save();                
        }

        return '/img/spotlights_ads_star.png';


    }

}

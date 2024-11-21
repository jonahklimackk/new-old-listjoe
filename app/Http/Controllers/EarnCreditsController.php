<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
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

        $now = new Carbon();

        $creditClick = CreditClicks::where('key', $key)->get()->first();

        if (is_null($creditClick))
            $message = "We can't find this credit link.";

        // else if ()
        // if ($expired)
        //     $message = "Your credit link has expired.";

        else if ($creditClick->earned_credits == true)
            $message = 'You already earned '.$creditClick->credits.' credits for this credit link';        else
        $message = "Wait for the timer to count down and you'll earn ".$creditClick->credits. " credits";

        // return View('frames.top-frame',compact('creditClick','message'));


        return View('frames.earn-credits',compact('message','creditClick'));

        // return  View('members.credits-frame', compact('creditClick'))->with('message',$message)\
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

            return View('frames.top-frame-after-click')->with('message',"You've earned  ".$creditClick->credits." credits.");
        }
        else
            return View('frames.top-frame-after-click')->with ('message','You already clicked this credit link');
        


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

}

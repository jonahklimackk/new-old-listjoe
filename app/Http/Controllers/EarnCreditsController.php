<?php

namespace App\Http\Controllers;

use App\Models\CreditClicks;
use Illuminate\Http\Request;

class EarnCreditsController extends Controller
{




    /**
    * Earn Credits For Clicking Emails
    *
    * @return View
    */
    //what if we calledd it this:
        // public function showCreditFrame(string $key)
    public function clickedCreditsMail(string $key)
    {
        //the person clicking is probalby not logged ind
        //the user has to be stored in the credit click
        //d
        $creditClick = CreditClicks::where('key', $key)->get()->first();

        //what about expiruy dates on credcit clicks


        return  View('members.credits-frame', compact('creditClick'));
    }



    public function afterCountdown(string $key)
    {
        //when the coujntedown timer ends, this might have to be a apost?
        // and ajax

        $creditClick = CreditClicks::where('key',$key)->get()->first();

        $recipient = User::where('id', $creditClick->recipient_id)->get()->first();
        $recipient->credits += $creditClick->credits;
        $recipient->save();

        return "you've earned  ".$creditClick->credits." credits";


    }

}

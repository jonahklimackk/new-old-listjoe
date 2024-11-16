<?php

namespace App\Http\Controllers;


use Auth;
use Cookie;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Campaigns;
use App\Models\Membership;
use Illuminate\Http\Request;
use App\Models\CreditsOrders;
use App\Helpers\AffiliateTracker;
use App\Models\SubscriptionOrders;

class StripePurchaseController extends Controller
{
    /**
    * Process a successful payment by stripe checkout for a membership
    *
    * @return void
    */
    public function processMembership($membershipId, $checkoutSessionId, Request $request)
    {

        dump($checkoutSessionId);
        dump(Auth::user()->id);


        if (Auth::user()) {   

            switch ($membershipId) {
                case 1:
                $price = '27';
                $membershipName = 'bronze';
                $membershipId = 1;
                $expiresAtDate = new Carbon('1 month');
                break;
                case 2:
                $price = '47';
                $membershipName = 'silver';
                $expiresAtDate = new Carbon('1 month');
                $membershipId = 2;
                break;
                case 3:
                $price = '67';
                $membershipName = 'gold';
                $expiresAtDate = new Carbon('1 month');
                $membershipId = 3;
                break;
                case 4:
                $price = '197';
                $membershipName = 'gold';
                $expiresAtDate = new Carbon('6 months');
                $membershipId = 3;
                break;
                case 5:
                $price = '297';
                $membershipName = 'gold';
                $expiresAtDate = new Carbon('1 year');
                $membershipId = 3;
                break;
            }

            //error if order already there in case of refressh
            if (SubscriptionOrders::where('checkout_session_id', $checkoutSessionId)->get()->count()) {
                return view('members.payment.duplicate');
            }
            else {

                //this is the field that checks for user status
                Auth::user()->membership=$membershipName;
                Auth::user()->save(); 

                //so users ccan trak whihc acdampaign resu;lt3ee in a sale  
                $this->recordCampaign();

// dd(Auth::user());s
                $order = SubscriptionOrders::create([
                    'user_id' => Auth::user()->id,
                    'sponsor_id' => Auth::user()->sponsor_id,
                    'membership_id' => $membershipId,
                    'price' => $price,
                    'checkout_session_id' => $checkoutSessionId,
                    'ends_at' => $expiresAtDate
                ]);

                return view('members.payment.thank-you')->with('message','Your account has now been upgraded to  '.$membershipName.'.');
            }
        }
        else
            // no auth user
            return view('members.payment.error');
    }




    /**
    * Process a successful payment by stripe checkout for credits
    *
    * @return void
    */
    public function processCredits($creditsId, $checkoutSessionId, Request $request)
    {


        // if (strlen($checkoutSessionId) != ){

        //     return view('members.payment.error');   

        // }

        // dump($creditsId);
        // dump($checkoutSessionId);
        // dump(Auth::user());

        if (Auth::user()) {   

            //initialize 
            switch ($creditsId) {
                case 1:
                $credits = 3000;
                $price = '12';
                break;
                case 2:
                $credits = 8000;
                $price = '27';
                break;
                case 3:
                $credits = 20000;
                $price = '57';
                break;
                case 4:
                $credits = 50000;
                $price = '97';
                break;
                case 5:
                $credits = 150000;
                $price = '197';
                break;
            }



            //error if order already there in case of refressh
            if (CreditsOrders::where('checkout_session_id', $checkoutSessionId)->get()->count()) {
                return view('members.payment.duplicate');
            }
            else {

                //really important to do this
                Auth::user()->credits += $credits;
                Auth::user()->save(); 

                //so users ccan trak whihc acdampaign resu;lt3ee in a sale  
                //actualy disabling this b/c i dont want giv e cmomissions
                // no credits sales
                // $this->recordCampaign();


                $order = CreditsOrders::create([
                    'user_id' => Auth::user()->id,
                    'sponsor_id' => Auth::user()->sponsor_id,
                    'credits' => $credits,
                    'price' => $price,
                    'checkout_session_id' => $checkoutSessionId,
                ]);



                return view('members.payment.thank-you')->with('message','Your account has now been credited with '.$credits.' credits.');              
            }
        }
        else
            // no auth user
            return view('members.payment.error');        

    }




    /**
    * Get the campaign and pass it off to get recorded
    *
    * @return void
    */
    public function recordCampaign()
    {
        $campaignName= Cookie::get('campaign');
        $campaign = Campaigns::where('affiliate_id',User::getSponsor()->id)->where('value', $campaignName)->get()->first();
        if ($campaign)
            AffiliateTracker::recordSale($campaign->id);     
    }

}

<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use View;
use Session;
use Redirect;
use App\Models\User;
use App\Helpers\Error;
use App\Models\Mailing;
use App\Models\LoginAd;
use Middleware\MemberAds;
use App\Models\TopMemberAds;
use App\Models\TopEmailAd;
use App\Models\SpotlightAds;
use Illuminate\Http\Request;
use App\Models\CancelFeedback;
use Illuminate\Foundation\Configuration\Middleware;

class YourAccountController extends Controller
{

    /**
     * create a new Controller Instance
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('member.ads');


    }





    /**
     * show member home page
     *
     * @return void
     */
    public function home()

    {

        return View('members.home');
    }




    /**
    * show member cancel page
    *
    * @return void
    */
    public function cancel()
    {
        return View('members.cancel');
    }


    /**
    * Process the cancellation request
    *
    * @return void
    */
    public function processCancel(Request $request)
    {
        if (is_null($request->feedback) || isset($request->feedback))
        {
            CancelFeedback::create([
                'feedback' => $request->feedback,
                'notes' => Auth::user()->username
            ]);



            //have to remove from all tablse too

            $user = User::where('id', Auth::user()->id)->get()->first();

            $topMemberAds = TopMemberAds::where('user_id',$user->id)->get()->all();
            if ($topMemberAds)
                foreach($topMemberAds as $topMemberAd) {
                    $topMemberAd->delete();
                };



                $spotLightAds = SpotlightAds::where('user_id',$user->id)->get()->all();
                if ($spotLightAds)
                    foreach($spotLightAds as $spotLightAd) {
                        $spotLightAd->delete();
                    };

                    $loginAds = LoginAd::where('user_id',$user->id)->get()->all();
                    if ($loginAds)
                        foreach($loginAds as $loginAd) {
                            $loginAd->delete();
                        };

                        $topEmailAds = topEmailAd::where('user_id',$user->id)->get()->all();
                        if ($topEmailAds)
                            foreach($topEmailAds as $topEmailAd) {
                                $topEmailAd->delete();
                            };

                            $mailings = Mailing::where('user_id',$user->id)->get()->all();
                            if ($mailings)
                                foreach($mailings as $mailing) {
                                    $mailing->delete();
                                };


            // $user->delete();
            // $this->forceLogout();

                                return View('members.cancelled');
                            }
                            else
                                Error::handle('<h1>Unknown Error! Please contact admin</h1>');
                        }





    /**
    * show upgrade page
    *
    * @return void
    */
    public function upgrade()
    {

        return View('members.stripe-test-upgrade');

       // return View('members.upgrade');
    }








    /**
    * Log the user out
    *
    * @return void
    */
    public function logout()
    {

       $this->forceLogout();
       return Redirect::to("/logout");
   }



    /**
    * Log the user out
    *
    * @return void
    */
    public function forceLogout()
    {
        // Auth::logout();
        $session = DB::table('sessions')->where('user_id', Auth::user()->id)->delete();
        // Session::flush();
    }


}
